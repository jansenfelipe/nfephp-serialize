<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("ide") 
 */
class Ide {

    /**
     * @Type("string")
     */
    public $cUF;

    /**
     * @Type("string")
     */
    public $cNF;

    /**
     * @Type("string")
     */
    public $natOp;

    /**
     * @Type("string")
     */
    public $indPag;

    /**
     * @Type("string")
     */
    public $mod;

    /**
     * @Type("string")
     */
    public $serie;

    /**
     * @Type("string")
     */
    public $nNF;

    /**
     * @Type("string")
     */
    public $dEmi;

    /**
     * @Type("string")
     */
    public $dSaiEnt;

    /**
     * @Type("string")
     */
    public $tpNF;

    /**
     * @Type("string")
     */
    public $cMunFG;

    /**
     * @Type("string")
     */
    public $tpImp;

    /**
     * @Type("string")
     */
    public $tpEmis;

    /**
     * @Type("string")
     */
    public $cDV;

    /**
     * @Type("string")
     */
    public $tpAmb;

    /**
     * @Type("string")
     */
    public $finNFe;

    /**
     * @Type("string")
     */
    public $procEmi;

    /**
     * @Type("string")
     */
    public $verProc;

}
