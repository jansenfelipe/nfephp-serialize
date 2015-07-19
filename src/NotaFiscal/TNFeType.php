<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TNFeType
 *
 * Tipo Nota Fiscal Eletrônica
 * XSD Type: TNFe
 */
class TNFeType
{

    /**
     * Informações da Nota Fiscal eletrônica
     *
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType $infNFe
     */
    private $infNFe = null;

    /**
     * @property \JansenFelipe\NFePHPSerialize\Xmldsig\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as infNFe
     *
     * Informações da Nota Fiscal eletrônica
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType
     */
    public function getInfNFe()
    {
        return $this->infNFe;
    }

    /**
     * Sets a new infNFe
     *
     * Informações da Nota Fiscal eletrônica
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType $infNFe
     * @return self
     */
    public function setInfNFe(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType $infNFe)
    {
        $this->infNFe = $infNFe;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return \JansenFelipe\NFePHPSerialize\Xmldsig\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \JansenFelipe\NFePHPSerialize\Xmldsig\Signature $signature
     * @return self
     */
    public function setSignature(\JansenFelipe\NFePHPSerialize\Xmldsig\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

