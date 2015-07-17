<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlAttribute;

/** 
 * @XmlRoot("det") 
 */
class Det {
    
    /**
     * @XmlAttribute
     * @Type("string")
     */
    public $nItem;

    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Prod")
     */
    public $prod;
    
    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto\Imposto")
     */
    public $imposto;
    
}
