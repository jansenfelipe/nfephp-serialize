<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Emit;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * @XmlRoot("emit") 
 */
class Emit {

    /**
     * @Type("string")
     */
    public $CNPJ;

    /**
     * @Type("string")
     */
    public $xNome;

    /**
     * @Type("string")
     */
    public $xFant;
    
    /**
     * @Type("string")
     */
    public $IE;

    /**
     * @Type("string")
     */
    public $CRT;
    
    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Emit\EnderEmit")
     */
    public $enderEmit;

}
