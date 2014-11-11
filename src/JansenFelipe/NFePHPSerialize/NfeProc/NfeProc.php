<?php
namespace JansenFelipe\NFePHPSerialize\NfeProc;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * @XmlRoot("nfeProc")
 * @XmlNamespace(uri="http://www.portalfiscal.inf.br/nfe")
 */
class NfeProc {

    /**
     * @XmlAttribute
     * @Type("string")
     */
    public $versao;
    
    
    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\NFe")
     */
    public $NFe;
    
    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\ProtNFe\ProtNFe")
     */
    public $protNFe;
}
