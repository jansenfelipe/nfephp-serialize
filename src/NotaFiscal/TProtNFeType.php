<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TProtNFeType
 *
 * Tipo Protocolo de status resultado do processamento da NF-e
 * XSD Type: TProtNFe
 */
class TProtNFeType
{

    /**
     * @property string $versao
     */
    private $versao = null;

    /**
     * Dados do protocolo de status
     *
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TProtNFeType\InfProtAType
     * $infProt
     */
    private $infProt = null;

    /**
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\Signature $signature
     */
    private $signature = null;

    /**
     * Gets as versao
     *
     * @return string
     */
    public function getVersao()
    {
        return $this->versao;
    }

    /**
     * Sets a new versao
     *
     * @param string $versao
     * @return self
     */
    public function setVersao($versao)
    {
        $this->versao = $versao;
        return $this;
    }

    /**
     * Gets as infProt
     *
     * Dados do protocolo de status
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TProtNFeType\InfProtAType
     */
    public function getInfProt()
    {
        return $this->infProt;
    }

    /**
     * Sets a new infProt
     *
     * Dados do protocolo de status
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TProtNFeType\InfProtAType
     * $infProt
     * @return self
     */
    public function setInfProt(\JansenFelipe\NFePHPSerialize\NotaFiscal\TProtNFeType\InfProtAType $infProt)
    {
        $this->infProt = $infProt;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\Signature $signature
     * @return self
     */
    public function setSignature(\JansenFelipe\NFePHPSerialize\NotaFiscal\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

