<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TIpiType
 *
 * Tipo: Dados do IPI
 * XSD Type: TIpi
 */
class TIpiType
{

    /**
     * Classe de Enquadramento do IPI para Cigarros e Bebidas
     *
     * @property string $clEnq
     */
    private $clEnq = null;

    /**
     * CNPJ do produtor da mercadoria, quando diferente do emitente. Somente para os
     * casos de exportação direta ou indireta.
     *
     * @property string $cNPJProd
     */
    private $cNPJProd = null;

    /**
     * Código do selo de controle do IPI
     *
     * @property string $cSelo
     */
    private $cSelo = null;

    /**
     * Quantidade de selo de controle do IPI
     *
     * @property string $qSelo
     */
    private $qSelo = null;

    /**
     * Código de Enquadramento Legal do IPI (tabela a ser criada pela RFB)
     *
     * @property string $cEnq
     */
    private $cEnq = null;

    /**
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TIpiType\IPITribAType
     * $iPITrib
     */
    private $iPITrib = null;

    /**
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TIpiType\IPINTAType $iPINT
     */
    private $iPINT = null;

    /**
     * Gets as clEnq
     *
     * Classe de Enquadramento do IPI para Cigarros e Bebidas
     *
     * @return string
     */
    public function getClEnq()
    {
        return $this->clEnq;
    }

    /**
     * Sets a new clEnq
     *
     * Classe de Enquadramento do IPI para Cigarros e Bebidas
     *
     * @param string $clEnq
     * @return self
     */
    public function setClEnq($clEnq)
    {
        $this->clEnq = $clEnq;
        return $this;
    }

    /**
     * Gets as cNPJProd
     *
     * CNPJ do produtor da mercadoria, quando diferente do emitente. Somente para os
     * casos de exportação direta ou indireta.
     *
     * @return string
     */
    public function getCNPJProd()
    {
        return $this->cNPJProd;
    }

    /**
     * Sets a new cNPJProd
     *
     * CNPJ do produtor da mercadoria, quando diferente do emitente. Somente para os
     * casos de exportação direta ou indireta.
     *
     * @param string $cNPJProd
     * @return self
     */
    public function setCNPJProd($cNPJProd)
    {
        $this->cNPJProd = $cNPJProd;
        return $this;
    }

    /**
     * Gets as cSelo
     *
     * Código do selo de controle do IPI
     *
     * @return string
     */
    public function getCSelo()
    {
        return $this->cSelo;
    }

    /**
     * Sets a new cSelo
     *
     * Código do selo de controle do IPI
     *
     * @param string $cSelo
     * @return self
     */
    public function setCSelo($cSelo)
    {
        $this->cSelo = $cSelo;
        return $this;
    }

    /**
     * Gets as qSelo
     *
     * Quantidade de selo de controle do IPI
     *
     * @return string
     */
    public function getQSelo()
    {
        return $this->qSelo;
    }

    /**
     * Sets a new qSelo
     *
     * Quantidade de selo de controle do IPI
     *
     * @param string $qSelo
     * @return self
     */
    public function setQSelo($qSelo)
    {
        $this->qSelo = $qSelo;
        return $this;
    }

    /**
     * Gets as cEnq
     *
     * Código de Enquadramento Legal do IPI (tabela a ser criada pela RFB)
     *
     * @return string
     */
    public function getCEnq()
    {
        return $this->cEnq;
    }

    /**
     * Sets a new cEnq
     *
     * Código de Enquadramento Legal do IPI (tabela a ser criada pela RFB)
     *
     * @param string $cEnq
     * @return self
     */
    public function setCEnq($cEnq)
    {
        $this->cEnq = $cEnq;
        return $this;
    }

    /**
     * Gets as iPITrib
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TIpiType\IPITribAType
     */
    public function getIPITrib()
    {
        return $this->iPITrib;
    }

    /**
     * Sets a new iPITrib
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TIpiType\IPITribAType $iPITrib
     * @return self
     */
    public function setIPITrib(\JansenFelipe\NFePHPSerialize\NotaFiscal\TIpiType\IPITribAType $iPITrib)
    {
        $this->iPITrib = $iPITrib;
        return $this;
    }

    /**
     * Gets as iPINT
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TIpiType\IPINTAType
     */
    public function getIPINT()
    {
        return $this->iPINT;
    }

    /**
     * Sets a new iPINT
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TIpiType\IPINTAType $iPINT
     * @return self
     */
    public function setIPINT(\JansenFelipe\NFePHPSerialize\NotaFiscal\TIpiType\IPINTAType $iPINT)
    {
        $this->iPINT = $iPINT;
        return $this;
    }


}

