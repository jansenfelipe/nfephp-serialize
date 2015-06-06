<?php

namespace JansenFelipe\NFePHPSerialize;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JansenFelipe\NFePHPSerialize\NfeProc\NfeProc;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;

class NFePHPSerialize {

    public static function xml2Object($xml) {
        AnnotationRegistry::registerAutoloadNamespace(
            'JMS\Serializer\Annotation', __DIR__.'/../../../../../jms/serializer/src'
        );

        $serializer = SerializerBuilder::create()
                ->setPropertyNamingStrategy(new SerializedNameAnnotationStrategy(new IdenticalPropertyNamingStrategy()))
                ->build();

        return $serializer->deserialize($xml, 'JansenFelipe\NFePHPSerialize\NfeProc\NfeProc', 'xml');
    }

    public static function toXml(NfeProc $nfeProc) {
        return "";
    }

}
