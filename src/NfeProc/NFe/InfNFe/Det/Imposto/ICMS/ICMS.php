<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto\ICMS;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;

/**
 * @XmlRoot("ICMS") 
 */
class ICMS {

    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto\ICMS\ICMS60")
     */
    public $ICMS60;
    
    
    /**
     * @Type("JansenFelipe\NFePHPSerialize\NfeProc\NFe\InfNFe\Det\Imposto\ICMS\ICMSSN102")
     */
    public $ICMSSN102;

}
