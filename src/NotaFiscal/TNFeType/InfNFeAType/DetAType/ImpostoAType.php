<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType;

/**
 * Class representing ImpostoAType
 */
class ImpostoAType
{

    /**
     * Valor estimado total de impostos federais, estaduais e municipais
     *
     * @property string $vTotTrib
     */
    private $vTotTrib = null;

    /**
     * Dados do ICMS Normal e ST
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType
     * $iCMS
     */
    private $iCMS = null;

    /**
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TIpiType $iPI
     */
    private $iPI = null;

    /**
     * Dados do Imposto de Importação
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\IIAType
     * $iI
     */
    private $iI = null;

    /**
     * ISSQN
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ISSQNAType
     * $iSSQN
     */
    private $iSSQN = null;

    /**
     * Dados do PIS
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType
     * $pIS
     */
    private $pIS = null;

    /**
     * Dados do PIS Substituição Tributária
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISSTAType
     * $pISST
     */
    private $pISST = null;

    /**
     * Dados do COFINS
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\COFINSAType
     * $cOFINS
     */
    private $cOFINS = null;

    /**
     * Dados do COFINS da
     * Substituição Tributaria;
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\COFINSSTAType
     * $cOFINSST
     */
    private $cOFINSST = null;

    /**
     * Gets as vTotTrib
     *
     * Valor estimado total de impostos federais, estaduais e municipais
     *
     * @return string
     */
    public function getVTotTrib()
    {
        return $this->vTotTrib;
    }

    /**
     * Sets a new vTotTrib
     *
     * Valor estimado total de impostos federais, estaduais e municipais
     *
     * @param string $vTotTrib
     * @return self
     */
    public function setVTotTrib($vTotTrib)
    {
        $this->vTotTrib = $vTotTrib;
        return $this;
    }

    /**
     * Gets as iCMS
     *
     * Dados do ICMS Normal e ST
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType
     */
    public function getICMS()
    {
        return $this->iCMS;
    }

    /**
     * Sets a new iCMS
     *
     * Dados do ICMS Normal e ST
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType
     * $iCMS
     * @return self
     */
    public function setICMS(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ICMSAType $iCMS)
    {
        $this->iCMS = $iCMS;
        return $this;
    }

    /**
     * Gets as iPI
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TIpiType
     */
    public function getIPI()
    {
        return $this->iPI;
    }

    /**
     * Sets a new iPI
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TIpiType $iPI
     * @return self
     */
    public function setIPI(\JansenFelipe\NFePHPSerialize\NotaFiscal\TIpiType $iPI)
    {
        $this->iPI = $iPI;
        return $this;
    }

    /**
     * Gets as iI
     *
     * Dados do Imposto de Importação
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\IIAType
     */
    public function getII()
    {
        return $this->iI;
    }

    /**
     * Sets a new iI
     *
     * Dados do Imposto de Importação
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\IIAType
     * $iI
     * @return self
     */
    public function setII(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\IIAType $iI)
    {
        $this->iI = $iI;
        return $this;
    }

    /**
     * Gets as iSSQN
     *
     * ISSQN
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ISSQNAType
     */
    public function getISSQN()
    {
        return $this->iSSQN;
    }

    /**
     * Sets a new iSSQN
     *
     * ISSQN
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ISSQNAType
     * $iSSQN
     * @return self
     */
    public function setISSQN(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\ISSQNAType $iSSQN)
    {
        $this->iSSQN = $iSSQN;
        return $this;
    }

    /**
     * Gets as pIS
     *
     * Dados do PIS
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType
     */
    public function getPIS()
    {
        return $this->pIS;
    }

    /**
     * Sets a new pIS
     *
     * Dados do PIS
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType
     * $pIS
     * @return self
     */
    public function setPIS(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType $pIS)
    {
        $this->pIS = $pIS;
        return $this;
    }

    /**
     * Gets as pISST
     *
     * Dados do PIS Substituição Tributária
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISSTAType
     */
    public function getPISST()
    {
        return $this->pISST;
    }

    /**
     * Sets a new pISST
     *
     * Dados do PIS Substituição Tributária
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISSTAType
     * $pISST
     * @return self
     */
    public function setPISST(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISSTAType $pISST)
    {
        $this->pISST = $pISST;
        return $this;
    }

    /**
     * Gets as cOFINS
     *
     * Dados do COFINS
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\COFINSAType
     */
    public function getCOFINS()
    {
        return $this->cOFINS;
    }

    /**
     * Sets a new cOFINS
     *
     * Dados do COFINS
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\COFINSAType
     * $cOFINS
     * @return self
     */
    public function setCOFINS(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\COFINSAType $cOFINS)
    {
        $this->cOFINS = $cOFINS;
        return $this;
    }

    /**
     * Gets as cOFINSST
     *
     * Dados do COFINS da
     * Substituição Tributaria;
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\COFINSSTAType
     */
    public function getCOFINSST()
    {
        return $this->cOFINSST;
    }

    /**
     * Sets a new cOFINSST
     *
     * Dados do COFINS da
     * Substituição Tributaria;
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\COFINSSTAType
     * $cOFINSST
     * @return self
     */
    public function setCOFINSST(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType\ImpostoAType\COFINSSTAType $cOFINSST)
    {
        $this->cOFINSST = $cOFINSST;
        return $this;
    }


}

