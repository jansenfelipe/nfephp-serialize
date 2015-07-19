<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal;

/**
 * Class representing SignedInfoType
 *
 *
 * XSD Type: SignedInfoType
 */
class SignedInfoType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\SignedInfoType\CanonicalizationMethodAType
     * $canonicalizationMethod
     */
    private $canonicalizationMethod = null;

    /**
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\SignedInfoType\SignatureMethodAType
     * $signatureMethod
     */
    private $signatureMethod = null;

    /**
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\ReferenceType $reference
     */
    private $reference = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as canonicalizationMethod
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\SignedInfoType\CanonicalizationMethodAType
     */
    public function getCanonicalizationMethod()
    {
        return $this->canonicalizationMethod;
    }

    /**
     * Sets a new canonicalizationMethod
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\SignedInfoType\CanonicalizationMethodAType
     * $canonicalizationMethod
     * @return self
     */
    public function setCanonicalizationMethod(\JansenFelipe\NFePHPSerialize\NotaFiscal\SignedInfoType\CanonicalizationMethodAType $canonicalizationMethod)
    {
        $this->canonicalizationMethod = $canonicalizationMethod;
        return $this;
    }

    /**
     * Gets as signatureMethod
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\SignedInfoType\SignatureMethodAType
     */
    public function getSignatureMethod()
    {
        return $this->signatureMethod;
    }

    /**
     * Sets a new signatureMethod
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\SignedInfoType\SignatureMethodAType
     * $signatureMethod
     * @return self
     */
    public function setSignatureMethod(\JansenFelipe\NFePHPSerialize\NotaFiscal\SignedInfoType\SignatureMethodAType $signatureMethod)
    {
        $this->signatureMethod = $signatureMethod;
        return $this;
    }

    /**
     * Gets as reference
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\ReferenceType
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Sets a new reference
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\ReferenceType $reference
     * @return self
     */
    public function setReference(\JansenFelipe\NFePHPSerialize\NotaFiscal\ReferenceType $reference)
    {
        $this->reference = $reference;
        return $this;
    }


}

