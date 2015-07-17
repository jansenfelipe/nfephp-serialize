<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto\PIS;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("PISAliq") 
 */
class PISAliq {

    /**
     * @Type("string")
     */
    public $CST;

    /**
     * @Type("string")
     */
    public $vBC;

    /**
     * @Type("string")
     */
    public $pPIS;

    /**
     * @Type("string")
     */
    public $vPIS;

}
