<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TRetCancNFeType
 *
 * Tipo retorno Pedido de Cancelamento da Nota Fiscal Eletrônica
 * XSD Type: TRetCancNFe
 */
class TRetCancNFeType
{

    /**
     * @property string $versao
     */
    private $versao = null;

    /**
     * Dados do Resultado do Pedido de Cancelamento da Nota Fiscal Eletrônica
     *
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetCancNFeType\InfCancAType
     * $infCanc
     */
    private $infCanc = null;

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
     * Gets as infCanc
     *
     * Dados do Resultado do Pedido de Cancelamento da Nota Fiscal Eletrônica
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetCancNFeType\InfCancAType
     */
    public function getInfCanc()
    {
        return $this->infCanc;
    }

    /**
     * Sets a new infCanc
     *
     * Dados do Resultado do Pedido de Cancelamento da Nota Fiscal Eletrônica
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetCancNFeType\InfCancAType
     * $infCanc
     * @return self
     */
    public function setInfCanc(\JansenFelipe\NFePHPSerialize\NotaFiscal\TRetCancNFeType\InfCancAType $infCanc)
    {
        $this->infCanc = $infCanc;
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

