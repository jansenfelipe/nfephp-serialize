<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("prod") 
 */
class Prod {

    /**
     * @Type("string")
     */
    public $cProd;

    /**
     * @Type("string")
     */
    public $cEAN;

    /**
     * @Type("string")
     */
    public $xProd;

    /**
     * @Type("string")
     */
    public $NCM;

    /**
     * @Type("string")
     */
    public $CFOP;

    /**
     * @Type("string")
     */
    public $uCom;

    /**
     * @Type("string")
     */
    public $qCom;

    /**
     * @Type("string")
     */
    public $vUnCom;

    /**
     * @Type("string")
     */
    public $vProd;

    /**
     * @Type("string")
     */
    public $cEANTrib;

    /**
     * @Type("string")
     */
    public $uTrib;

    /**
     * @Type("string")
     */
    public $qTrib;

    /**
     * @Type("string")
     */
    public $vUnTrib;

    /**
     * @Type("string")
     */
    public $vFrete;

    /**
     * @Type("string")
     */
    public $vDesc;

    /**
     * @Type("string")
     */
    public $indTot;

    /**
     * @Type("string")
     */
    public $xPed;

    /**
     * @Type("string")
     */
    public $nItemPed;

}
