<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto\ICMS;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("ICMSSN102") 
 */
class ICMSSN102 {

    /**
     * @Type("string")
     */
    public $orig;

    /**
     * @Type("string")
     */
    public $CSOSN;

}
