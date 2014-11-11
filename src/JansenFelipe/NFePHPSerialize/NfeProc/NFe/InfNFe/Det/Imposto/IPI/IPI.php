<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto\IPI;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("IPI") 
 */
class IPI {

    /**
     * @Type("string")
     */
    public $cEnq;
    
    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto\IPI\IPITrib")
     */
    public $ICMS60;

}
