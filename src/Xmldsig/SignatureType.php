<?php

namespace JansenFelipe\NFePHPSerialize\Xmldsig;

/**
 * Class representing SignatureType
 *
 *
 * XSD Type: SignatureType
 */
class SignatureType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property \JansenFelipe\NFePHPSerialize\Xmldsig\SignedInfoType $signedInfo
     */
    private $signedInfo = null;

    /**
     * @property \JansenFelipe\NFePHPSerialize\Xmldsig\SignatureValueType
     * $signatureValue
     */
    private $signatureValue = null;

    /**
     * @property \JansenFelipe\NFePHPSerialize\Xmldsig\KeyInfoType $keyInfo
     */
    private $keyInfo = null;

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
     * Gets as signedInfo
     *
     * @return \JansenFelipe\NFePHPSerialize\Xmldsig\SignedInfoType
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * @param \JansenFelipe\NFePHPSerialize\Xmldsig\SignedInfoType $signedInfo
     * @return self
     */
    public function setSignedInfo(\JansenFelipe\NFePHPSerialize\Xmldsig\SignedInfoType $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * @return \JansenFelipe\NFePHPSerialize\Xmldsig\SignatureValueType
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * @param \JansenFelipe\NFePHPSerialize\Xmldsig\SignatureValueType $signatureValue
     * @return self
     */
    public function setSignatureValue(\JansenFelipe\NFePHPSerialize\Xmldsig\SignatureValueType $signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * @return \JansenFelipe\NFePHPSerialize\Xmldsig\KeyInfoType
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * @param \JansenFelipe\NFePHPSerialize\Xmldsig\KeyInfoType $keyInfo
     * @return self
     */
    public function setKeyInfo(\JansenFelipe\NFePHPSerialize\Xmldsig\KeyInfoType $keyInfo)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }


}

