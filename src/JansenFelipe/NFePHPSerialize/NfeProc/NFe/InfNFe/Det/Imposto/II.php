<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("II") 
 */
class II {

    /**
     * @Type("string")
     */
    public $vBC;

    /**
     * @Type("string")
     */
    public $vDespAdu;

    /**
     * @Type("string")
     */
    public $vII;

    /**
     * @Type("string")
     */
    public $vIOF;

}
