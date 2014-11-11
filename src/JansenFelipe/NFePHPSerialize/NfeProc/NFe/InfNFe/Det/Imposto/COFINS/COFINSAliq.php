<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto\COFINS;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("COFINSAliq") 
 */
class COFINSAliq {

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
    public $pCOFINS;

    /**
     * @Type("string")
     */
    public $vCOFINS;

}
