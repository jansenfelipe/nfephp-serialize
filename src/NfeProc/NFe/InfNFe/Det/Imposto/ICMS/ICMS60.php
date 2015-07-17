<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto\ICMS;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("ICMS60") 
 */
class ICMS60 {

    /**
     * @Type("string")
     */
    public $orig;

    /**
     * @Type("string")
     */
    public $CST;

    /**
     * @Type("string")
     */
    public $vBCSTRet;

    /**
     * @Type("string")
     */
    public $vICMSSTRet;

}
