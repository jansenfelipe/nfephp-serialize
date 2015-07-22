<?php

namespace JansenFelipe\NFePHPSerialize;

use JansenFelipe\NFePHPSerialize\JMS\Serializer\XmlDeserializationVisitorCustom;
use JansenFelipe\NFePHPSerialize\JMS\Serializer\XmlSerializationVisitorCustom;
use JansenFelipe\NFePHPSerialize\NotaFiscal\NfeProc;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\Naming\CamelCaseNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\Serializer;
use JMS\Serializer\SerializerBuilder;

class NFePHPSerialize {

    /**
     * Transforma uma NFe XML em Objeto
     *
     * @return NfeProc
     */
    public static function xmlToObject($xml) {
        $serializer = self::buildSerializer();
          
        return $serializer->deserialize($xml, NfeProc::class, 'xml');
    }
    
    /**
     * Transforma uma NFe Objeto em XML
     *
     * @return string
     */
    public static function objectToXml(NfeProc $nfeProc) {
        $serializer = self::buildSerializer();
        
        return $serializer->serialize($nfeProc, 'xml');
    }
    
    /**
     * Constroi o serializer
     *
     * @return Serializer
     */
    private static function buildSerializer(){
        $serializerBuilder = SerializerBuilder::create();
        
        $serializerBuilder->setSerializationVisitor('xml', new XmlSerializationVisitorCustom(new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy())));
        $serializerBuilder->setDeserializationVisitor('xml', new XmlDeserializationVisitorCustom(new SerializedNameAnnotationStrategy(new CamelCaseNamingStrategy())));
        
        $yamlDir = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'yaml';
        
        $serializerBuilder->addMetadataDir($yamlDir.DIRECTORY_SEPARATOR.'NotaFiscal', 'JansenFelipe\NFePHPSerialize\NotaFiscal');
        $serializerBuilder->addMetadataDir($yamlDir.DIRECTORY_SEPARATOR.'XMLDSig', 'JansenFelipe\NFePHPSerialize\XMLDSig');
        
        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            
        });
        
        return $serializerBuilder->build();
    }

}
