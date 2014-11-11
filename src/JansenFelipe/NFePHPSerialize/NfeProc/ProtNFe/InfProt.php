<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\ProtNFe;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlElement;

/** 
 * @XmlRoot("infProt") 
 */
class InfProt {

    /**
     * @XmlElement(cdata=false)
     * @Type("string")
     */
    public $tpAmb;

    /**
     * @XmlElement(cdata=false)
     * @Type("string")
     */
    public $verAplic;

    /**
     * @XmlElement(cdata=false)
     * @Type("string")
     */
    public $chNFe;

    /**
     * @XmlElement(cdata=false)
     * @Type("string")
     */
    public $dhRecbto;

    /**
     * @XmlElement(cdata=false)
     * @Type("string")
     */
    public $nProt;

    /**
     * @XmlElement(cdata=false)
     * @Type("string")
     */
    public $digVal;

    /**
     * @XmlElement(cdata=false)
     * @Type("string")
     */
    public $cStat;

    /**
     * @XmlElement(cdata=false)
     * @Type("string")
     */
    public $xMotivo;

}
