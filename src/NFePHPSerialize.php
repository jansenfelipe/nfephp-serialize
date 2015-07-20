<?php

namespace JansenFelipe\NFePHPSerialize;

use JansenFelipe\NFePHPSerialize\NotaFiscal\NFe;
use JMS\Serializer\SerializerBuilder;

class NFePHPSerialize {

    /**
     * Transforma uma NFe XML em Objeto
     *
     * @return NFe
     */
    public static function xml2Object($xml) {

        $serializerBuilder = SerializerBuilder::create();

        $serializerBuilder->addMetadataDir(__DIR__.DIRECTORY_SEPARATOR.'..'.DIRECTORY_SEPARATOR.'yaml', 'JansenFelipe\NFePHPSerialize\NotaFiscal');
        $serializer = $serializerBuilder->build();

        return $serializer->deserialize($xml, NFe::class, 'xml');
    }

    public static function objectToXml(NFe $nfe) {
        return "";
    }

}
