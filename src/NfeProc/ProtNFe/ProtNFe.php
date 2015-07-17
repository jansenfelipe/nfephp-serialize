<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\ProtNFe;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * @XmlRoot("protNFe") 
 */
class ProtNFe {

    /**
     * @XmlAttribute
     * @Type("string")
     */
    public $versao;

    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\ProtNFe\InfProt")
     */
    public $infProt;

}
