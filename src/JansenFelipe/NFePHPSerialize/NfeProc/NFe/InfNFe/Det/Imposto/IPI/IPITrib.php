<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto\IPI;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("IPITrib") 
 */
class IPITrib {

    /**
     * @Type("string")
     */
    public $CST;

    /**
     * @Type("string")
     */
    public $qUnid;

    /**
     * @Type("string")
     */
    public $vUnid;

    /**
     * @Type("string")
     */
    public $vIPI;

}
