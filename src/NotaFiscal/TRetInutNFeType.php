<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TRetInutNFeType
 *
 * Tipo retorno do Pedido de Inutilização de Numeração da Nota Fiscal
 * Eletrônica
 * XSD Type: TRetInutNFe
 */
class TRetInutNFeType
{

    /**
     * @property string $versao
     */
    private $versao = null;

    /**
     * Dados do Retorno do Pedido de Inutilização de Numeração da Nota Fiscal
     * Eletrônica
     *
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetInutNFeType\InfInutAType
     * $infInut
     */
    private $infInut = null;

    /**
     * @property \JansenFelipe\NFePHPSerialize\XMLDSig\Signature $signature
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
     * Gets as infInut
     *
     * Dados do Retorno do Pedido de Inutilização de Numeração da Nota Fiscal
     * Eletrônica
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetInutNFeType\InfInutAType
     */
    public function getInfInut()
    {
        return $this->infInut;
    }

    /**
     * Sets a new infInut
     *
     * Dados do Retorno do Pedido de Inutilização de Numeração da Nota Fiscal
     * Eletrônica
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetInutNFeType\InfInutAType
     * $infInut
     * @return self
     */
    public function setInfInut(\JansenFelipe\NFePHPSerialize\NotaFiscal\TRetInutNFeType\InfInutAType $infInut)
    {
        $this->infInut = $infInut;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return \JansenFelipe\NFePHPSerialize\XMLDSig\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \JansenFelipe\NFePHPSerialize\XMLDSig\Signature $signature
     * @return self
     */
    public function setSignature(\JansenFelipe\NFePHPSerialize\XMLDSig\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

