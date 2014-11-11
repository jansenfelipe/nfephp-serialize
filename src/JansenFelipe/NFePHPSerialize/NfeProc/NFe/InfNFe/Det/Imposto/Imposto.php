<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto;

use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\Type;

/**
 * @XmlRoot("imposto") 
 */
class Imposto {

    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto\ICMS\ICMS")
     */
    public $ICMS;

    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto\IPI\IPI")
     */
    public $IPI;

    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto\II")
     */
    public $II;

    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto\PIS\PIS")
     */
    public $PIS;

    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto\COFINS\COFINS")
     */
    public $COFINS;

}
