<?php

namespace JansenFelipe\NFePHPSerialize;

use Doctrine\Common\Annotations\AnnotationRegistry;
use JansenFelipe\NFePHPSerialize\NfeProc\NfeProc;
use JMS\Serializer\Naming\IdenticalPropertyNamingStrategy;
use JMS\Serializer\Naming\SerializedNameAnnotationStrategy;
use JMS\Serializer\SerializerBuilder;
use ReflectionClass;

class NFePHPSerialize {

    /**
     * Transforma um XML (string) em Objeto (NfeProc)
     *
     * @return NfeProc
     */
    public static function xml2Object($xml) {

        AnnotationRegistry::registerAutoloadNamespace(
            'JMS\Serializer\Annotation',  dirname((new ReflectionClass(SerializerBuilder::class))->getFileName()).'/../../'
        );

        $serializer = SerializerBuilder::create()
                ->setPropertyNamingStrategy(new SerializedNameAnnotationStrategy(new IdenticalPropertyNamingStrategy()))
                ->build();

        return $serializer->deserialize($xml, 'JansenFelipe\NFePHPSerialize\NfeProc\NfeProc', 'xml');
    }

    public static function objectToXml(NfeProc $nfeProc) {
        return "";
    }

}
