<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Emit;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("enderEmit") 
 */
class EnderEmit {

    /**
     * @Type("string")
     */
    public $xLgr;

    /**
     * @Type("string")
     */
    public $nro;

    /**
     * @Type("string")
     */
    public $xCpl;

    /**
     * @Type("string")
     */
    public $xBairro;

    /**
     * @Type("string")
     */
    public $cMun;

    /**
     * @Type("string")
     */
    public $xMun;

    /**
     * @Type("string")
     */
    public $UF;

    /**
     * @Type("string")
     */
    public $CEP;

    /**
     * @Type("string")
     */
    public $cPais;

    /**
     * @Type("string")
     */
    public $xPais;

    /**
     * @Type("string")
     */
    public $fone;

}
