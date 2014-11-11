<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\XmlList;

/**
 * @XmlRoot("infNFe")
 */
class InfNFe {

    /**
     * @XmlAttribute
     * @Type("string")
     */
    public $versao;

    /**
     * @XmlAttribute
     * @Type("string")
     */
    public $Id;
    
    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Ide")
     */
    public $ide;
    
    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Emit\Emit")
     */
    public $emit;
    
    /**
     * @XmlList(inline = true, entry = "det")
     * @Type("array<JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Det>")
     */
    public $dets;

}
