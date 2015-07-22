<?php

namespace JansenFelipe\NFePHPSerialize\JMS\Serializer;

use DOMDocument;
use JMS\Serializer\Context;
use JMS\Serializer\Exception\InvalidArgumentException;
use JMS\Serializer\Exception\LogicException;
use JMS\Serializer\Exception\RuntimeException;
use JMS\Serializer\Exception\XmlErrorException;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\PropertyMetadata;
use JMS\Serializer\XmlDeserializationVisitor;
use SplStack;

class XmlDeserializationVisitorCustom extends XmlDeserializationVisitor
{
    private $objectStack;
    private $metadataStack;
    private $objectMetadataStack;
    private $currentObject;
    private $currentMetadata;
    private $result;
    private $navigator;
    private $disableExternalEntities = true;
    private $doctypeWhitelist = array();
    
    public function enableExternalEntities()
    {
        $this->disableExternalEntities = false;
    }
    public function setNavigator(GraphNavigator $navigator)
    {
        $this->navigator = $navigator;
        $this->objectStack = new SplStack;
        $this->metadataStack = new SplStack;
        $this->objectMetadataStack = new SplStack;
        $this->result = null;
    }
    public function getNavigator()
    {
        return $this->navigator;
    }
    public function prepare($data)
    {
        $previous = libxml_use_internal_errors(true);
        $previousEntityLoaderState = libxml_disable_entity_loader($this->disableExternalEntities);
        $dom = new DOMDocument();
        $dom->loadXML($data);
        foreach ($dom->childNodes as $child) {
            if ($child->nodeType === XML_DOCUMENT_TYPE_NODE) {
                $internalSubset = str_replace(array("\n", "\r"), '', $child->internalSubset);
                if (!in_array($internalSubset, $this->doctypeWhitelist, true)) {
                    throw new InvalidArgumentException(sprintf(
                        'The document type "%s" is not allowed. If it is safe, you may add it to the whitelist configuration.',
                        $internalSubset
                    ));
                }
            }
        }
        $doc = simplexml_load_string($data);
        libxml_use_internal_errors($previous);
        libxml_disable_entity_loader($previousEntityLoaderState);
        if (false === $doc) {
            throw new XmlErrorException(libxml_get_last_error());
        }
        return $doc;
    }
    public function visitNull($data, array $type, Context $context)
    {
        return null;
    }
    public function visitString($data, array $type, Context $context)
    {
        $data = (string) $data;
        if (null === $this->result) {
            $this->result = $data;
        }
        return $data;
    }
    public function visitBoolean($data, array $type, Context $context)
    {
        $data = (string) $data;
        if ('true' === $data || '1' === $data) {
            $data = true;
        } elseif ('false' === $data || '0' === $data) {
            $data = false;
        } else {
            throw new RuntimeException(sprintf('Could not convert data to boolean. Expected "true", "false", "1" or "0", but got %s.', json_encode($data)));
        }
        if (null === $this->result) {
            $this->result = $data;
        }
        return $data;
    }
    public function visitInteger($data, array $type, Context $context)
    {
        $data = (integer) $data;
        if (null === $this->result) {
            $this->result = $data;
        }
        return $data;
    }
    public function visitDouble($data, array $type, Context $context)
    {
        $data = (double) $data;
        if (null === $this->result) {
            $this->result = $data;
        }
        return $data;
    }
    public function visitArray($data, array $type, Context $context)
    {
        $entryName = null !== $this->currentMetadata && $this->currentMetadata->xmlEntryName ? $this->currentMetadata->xmlEntryName : 'entry';
        $namespace = null !== $this->currentMetadata && $this->currentMetadata->xmlEntryNamespace ? $this->currentMetadata->xmlEntryNamespace : null;
        if ($namespace === null && $this->objectMetadataStack->count()) {
            $classMetadata = $this->objectMetadataStack->top();
            $namespace = isset($classMetadata->xmlNamespaces[''])?$classMetadata->xmlNamespaces['']:$namespace;
        }
        if ( ! isset($data->$entryName) ) {
            if (null === $this->result) {
                return $this->result = array();
            }
            return array();
        }
        switch (count($type['params'])) {
            case 0:
                throw new RuntimeException(sprintf('The array type must be specified either as "array<T>", or "array<K,V>".'));
            case 1:
                $result = array();
                if (null === $this->result) {
                    $this->result = &$result;
                }
                $nodes = $data->children($namespace)->$entryName;
                foreach ($nodes as $v) {
                    $result[] = $this->navigator->accept($v, $type['params'][0], $context);
                }
                return $result;
            case 2:
                if (null === $this->currentMetadata) {
                    throw new RuntimeException('Maps are not supported on top-level without metadata.');
                }
                list($keyType, $entryType) = $type['params'];
                $result = array();
                if (null === $this->result) {
                    $this->result = &$result;
                }
                $nodes = $data->children($namespace)->$entryName;
                foreach ($nodes as $v) {
                    $attrs = $v->attributes();
                    if (!isset($attrs[$this->currentMetadata->xmlKeyAttribute])) {
                        throw new RuntimeException(sprintf('The key attribute "%s" must be set for each entry of the map.', $this->currentMetadata->xmlKeyAttribute));
                    }
                    $k = $this->navigator->accept($attrs[$this->currentMetadata->xmlKeyAttribute], $keyType, $context);
                    $result[$k] = $this->navigator->accept($v, $entryType, $context);
                }
                return $result;
            default:
                throw new LogicException(sprintf('The array type does not support more than 2 parameters, but got %s.', json_encode($type['params'])));
        }
    }
    public function startVisitingObject(ClassMetadata $metadata, $object, array $type, Context $context)
    {
        $this->setCurrentObject($object);
        $this->objectMetadataStack->push($metadata);
        if (null === $this->result) {
            $this->result = $this->currentObject;
        }
    }
    
    public function castAs($newClass) {
        $obj = new $newClass;
        foreach (get_object_vars($this) as $key => $name) {
            $obj->$key = $name;
        }
        return $obj;
    }
    
    public function visitProperty(PropertyMetadata $metadata, $data, Context $context){
        $metadataCustom = new PropertyMetadataCustom($metadata->class, $metadata->name);
        
        foreach (get_object_vars($metadata) as $key => $name)
            $metadataCustom->$key = $name;
        
        $this->visitPropertyCustom($metadataCustom, $data, $context);
    }
    
    public function visitPropertyCustom(PropertyMetadataCustom $metadata, $data, Context $context)
    {
        $name = $this->namingStrategy->translateName($metadata);
        if (!$metadata->type) {
            throw new RuntimeException(sprintf('You must define a type for %s::$%s.', $metadata->reflection->class, $metadata->name));
        }
       if ($metadata->xmlAttribute) {
            $attributes = $data->attributes($metadata->xmlNamespace);
            if (isset($attributes[$name])) {
                $v = $this->navigator->accept($attributes[$name], $metadata->type, $context);
                $metadata->reflection->setValue($this->currentObject, $v);
            }
            return;
        }
        if ($metadata->xmlValue) {
            $v = $this->navigator->accept($data, $metadata->type, $context);
            $metadata->reflection->setValue($this->currentObject, $v);
            return;
        }
        if ($metadata->xmlCollection) {
            $enclosingElem = $data;
            if (!$metadata->xmlCollectionInline) {
                $enclosingElem = $data->children($metadata->xmlNamespace)->$name;
            }
            $this->setCurrentMetadata($metadata);
            $v = $this->navigator->accept($enclosingElem, $metadata->type, $context);
            $this->revertCurrentMetadata();
            $metadata->reflection->setValue($this->currentObject, $v);
            return;
        }
        if ($metadata->xmlNamespace) {
            $node = $data->children($metadata->xmlNamespace)->$name;
            if (!$node->count()) {
                return;
            }
        } else {
            $namespaces = $data->getDocNamespaces();
            if (isset($namespaces[''])) {
                $prefix = uniqid('ns-');
                $data->registerXPathNamespace($prefix, $namespaces['']);
                $nodes = $data->xpath('./'.$prefix. ':'.$name );
                if (empty($nodes)) {
                    return;
                }
                $node = reset($nodes);
            } else {
                if (!isset($data->$name)) {
                    return;
                }
                $node = $data->$name;
            }
        }
        $v = $this->navigator->accept($node, $metadata->type, $context);
        if (null === $metadata->setter) {
            $metadata->reflection->setValue($this->currentObject, $v);
            return;
        }
        $this->currentObject->{$metadata->setter}($v);
    }
    public function endVisitingObject(ClassMetadata $metadata, $data, array $type, Context $context)
    {
        $rs = $this->currentObject;
        $this->objectMetadataStack->pop();
        $this->revertCurrentObject();
        return $rs;
    }
    public function setCurrentObject($object)
    {
        $this->objectStack->push($this->currentObject);
        $this->currentObject = $object;
    }
    public function getCurrentObject()
    {
        return $this->currentObject;
    }
    public function revertCurrentObject()
    {
        return $this->currentObject = $this->objectStack->pop();
    }
    public function setCurrentMetadata(PropertyMetadata $metadata)
    {
        $metadataCustom = new PropertyMetadataCustom($metadata->class, $metadata->name);
        
        foreach (get_object_vars($metadata) as $key => $name)
            $metadataCustom->$key = $name;
        
        $this->setCurrentMetadataCustom($metadataCustom);
    }
    public function setCurrentMetadataCustom(PropertyMetadataCustom $metadata)
    {
        $this->metadataStack->push($this->currentMetadata);
        $this->currentMetadata = $metadata;
    }
    public function getCurrentMetadata()
    {
        return $this->currentMetadata;
    }
    public function revertCurrentMetadata()
    {
        return $this->currentMetadata = $this->metadataStack->pop();
    }
    public function getResult()
    {
        return $this->result;
    }
    /**
     * @param array<string> $doctypeWhitelist
     */
    public function setDoctypeWhitelist(array $doctypeWhitelist)
    {
        $this->doctypeWhitelist = $doctypeWhitelist;
    }
    /**
     * @return array<string>
     */
    public function getDoctypeWhitelist()
    {
        return $this->doctypeWhitelist;
    }
}