<?php

namespace JansenFelipe\NFePHPSerialize;

use Goetas\Xsd\XsdToPhp\Jms\Handler\BaseTypesHandler;
use Goetas\Xsd\XsdToPhp\Jms\Handler\XmlSchemaDateHandler;
use JansenFelipe\NFePHPSerialize\NotaFiscal\NFe;
use JMS\Serializer\Handler\HandlerRegistryInterface;
use JMS\Serializer\SerializerBuilder;

class NFePHPSerialize {

    /**
     * Transforma um XML (string) em Objeto (NfeProc)
     *
     * @return NFe
     */
    public static function xml2Object($xml) {

        $serializerBuilder = SerializerBuilder::create();
        $serializerBuilder->addMetadataDir(__DIR__.'/../yml', 'JansenFelipe\NFePHPSerialize\NotaFiscal');

        $serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handler) use ($serializerBuilder) {
            $serializerBuilder->addDefaultHandlers();

            $handler->registerSubscribingHandler(new BaseTypesHandler()); // XMLSchema List handling
            $handler->registerSubscribingHandler(new XmlSchemaDateHandler()); // XMLSchema date handling

        });

        $serializer = $serializerBuilder->build();


        return $serializer->deserialize($xml, NFe::class, 'xml');
    }

    public static function objectToXml(NFe $nfe) {
        return "";
    }

}
