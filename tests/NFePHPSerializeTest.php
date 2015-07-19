<?php

use JansenFelipe\NFePHPSerialize\NFePHPSerialize;

class NFePHPSerializeTest extends PHPUnit_Framework_TestCase{

    public function testXml2Object() {

        $xml = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'nfe.xml');


        $object = NFePHPSerialize::xml2Object($xml);

        var_dump($object);

    }

}
