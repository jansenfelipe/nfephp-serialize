<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TProcInutNFeType
 *
 * Tipo Pedido de inutilzação de númeração de NF-e processado
 * XSD Type: TProcInutNFe
 */
class TProcInutNFeType
{

    /**
     * @property string $versao
     */
    private $versao = null;

    /**
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TInutNFeType $inutNFe
     */
    private $inutNFe = null;

    /**
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetInutNFeType $retInutNFe
     */
    private $retInutNFe = null;

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
     * Gets as inutNFe
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TInutNFeType
     */
    public function getInutNFe()
    {
        return $this->inutNFe;
    }

    /**
     * Sets a new inutNFe
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TInutNFeType $inutNFe
     * @return self
     */
    public function setInutNFe(\JansenFelipe\NFePHPSerialize\NotaFiscal\TInutNFeType $inutNFe)
    {
        $this->inutNFe = $inutNFe;
        return $this;
    }

    /**
     * Gets as retInutNFe
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetInutNFeType
     */
    public function getRetInutNFe()
    {
        return $this->retInutNFe;
    }

    /**
     * Sets a new retInutNFe
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetInutNFeType $retInutNFe
     * @return self
     */
    public function setRetInutNFe(\JansenFelipe\NFePHPSerialize\NotaFiscal\TRetInutNFeType $retInutNFe)
    {
        $this->retInutNFe = $retInutNFe;
        return $this;
    }


}

