<?php

namespace JansenFelipe\NFePHPSerialize;

use Goetas\Xsd\XsdToPhp\Jms\Handler\BaseTypesHandler;
use Goetas\Xsd\XsdToPhp\Jms\Handler\XmlSchemaDateHandler;
use JansenFelipe\NFePHPSerialize\NotaFiscal\NfeProc;
use JMS\Serializer\Handler\HandlerRegistryInterface;
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
        
        $yamlDir = __DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'yaml';
        
        $serializerBuilder->addMetadataDir($yamlDir.DIRECTORY_SEPARATOR.'NotaFiscal', 'JansenFelipe\NFePHPSerialize\NotaFiscal');
        $serializerBuilder->addMetadataDir($yamlDir.DIRECTORY_SEPARATOR.'XMLDSig', 'JansenFelipe\NFePHPSerialize\XMLDSig');
        
        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();
            $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling
        });
        
        return $serializerBuilder->build();
    }

}
