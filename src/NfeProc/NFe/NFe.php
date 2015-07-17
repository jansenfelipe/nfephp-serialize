<?php
namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * @XmlRoot("NFe")
 * @XmlNamespace(uri="http://www.portalfiscal.inf.br/nfe")
 */
class NFe {

    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\InfNFe")
     */
    public $infNFe;
    
    
    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\Signature")
     */
    public $Signature;
}
