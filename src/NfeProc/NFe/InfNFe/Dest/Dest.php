<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Dest;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlAttribute;

/**
 * @XmlRoot("dest") 
 */
class Dest {
    
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
    public $IE;

    /**
     * @Type("string")
     */
    public $email;
    
    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Dest\EnderDest")
     */
    public $enderDest;

}
