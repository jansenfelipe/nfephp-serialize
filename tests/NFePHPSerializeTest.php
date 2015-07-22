<?php

use JansenFelipe\NFePHPSerialize\NFePHPSerialize;
use JansenFelipe\NFePHPSerialize\NotaFiscal\NfeProc;

class NFePHPSerializeTest extends PHPUnit_Framework_TestCase {

    public function testXml2Object() {

        //Nfe 2.00
        $xml = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'nfe2.00.xml');
        $this->assertInstanceOf(NfeProc::class, NFePHPSerialize::xmlToObject($xml));

        //Nfe 3.10
        $xml = file_get_contents(__DIR__ . DIRECTORY_SEPARATOR . 'nfe3.10.xml');
        $this->assertInstanceOf(NfeProc::class, NFePHPSerialize::xmlToObject($xml));
    }

    public function testObject2Xml() {
        $nfeProc = new NfeProc();
        $nfeProc->setVersao('8.00');

        //Removing breaklines
        $xml = preg_replace("/\r|\n/", "", NFePHPSerialize::objectToXml($nfeProc));

        $this->assertEquals('<?xml version="1.0" encoding="UTF-8"?><nfeProc xmlns="http://www.portalfiscal.inf.br/nfe" versao="8.00"/>', $xml);
    }
}
