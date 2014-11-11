<?php

namespace JansenFelipe\NFePHPSerialize\NfeProc\NFe;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlNamespace;

/**
 * @XmlRoot("Signature")
 * @XmlNamespace(uri="http://www.w3.org/2000/09/xmldsig#")
 */
class Signature {

    /**
     * @Type("string")
     */
    public $SignatureValue;

}
