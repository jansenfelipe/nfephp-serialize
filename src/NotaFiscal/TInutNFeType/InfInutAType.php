<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal\TInutNFeType;

/**
 * Class representing InfInutAType
 */
class InfInutAType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * Identificação do Ambiente:
     * 1 - Produção
     * 2 - Homologação
     *
     * @property string $tpAmb
     */
    private $tpAmb = null;

    /**
     * Serviço Solicitado
     *
     * @property string $xServ
     */
    private $xServ = null;

    /**
     * Código da UF do emitente
     *
     * @property string $cUF
     */
    private $cUF = null;

    /**
     * Ano de inutilização da numeração
     *
     * @property string $ano
     */
    private $ano = null;

    /**
     * CNPJ do emitente
     *
     * @property string $cNPJ
     */
    private $cNPJ = null;

    /**
     * Modelo da NF-e (55, 65 etc.)
     *
     * @property string $mod
     */
    private $mod = null;

    /**
     * Série da NF-e
     *
     * @property string $serie
     */
    private $serie = null;

    /**
     * Número da NF-e inicial
     *
     * @property string $nNFIni
     */
    private $nNFIni = null;

    /**
     * Número da NF-e final
     *
     * @property string $nNFFin
     */
    private $nNFFin = null;

    /**
     * Justificativa do pedido de inutilização
     *
     * @property string $xJust
     */
    private $xJust = null;

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
     * Gets as tpAmb
     *
     * Identificação do Ambiente:
     * 1 - Produção
     * 2 - Homologação
     *
     * @return string
     */
    public function getTpAmb()
    {
        return $this->tpAmb;
    }

    /**
     * Sets a new tpAmb
     *
     * Identificação do Ambiente:
     * 1 - Produção
     * 2 - Homologação
     *
     * @param string $tpAmb
     * @return self
     */
    public function setTpAmb($tpAmb)
    {
        $this->tpAmb = $tpAmb;
        return $this;
    }

    /**
     * Gets as xServ
     *
     * Serviço Solicitado
     *
     * @return string
     */
    public function getXServ()
    {
        return $this->xServ;
    }

    /**
     * Sets a new xServ
     *
     * Serviço Solicitado
     *
     * @param string $xServ
     * @return self
     */
    public function setXServ($xServ)
    {
        $this->xServ = $xServ;
        return $this;
    }

    /**
     * Gets as cUF
     *
     * Código da UF do emitente
     *
     * @return string
     */
    public function getCUF()
    {
        return $this->cUF;
    }

    /**
     * Sets a new cUF
     *
     * Código da UF do emitente
     *
     * @param string $cUF
     * @return self
     */
    public function setCUF($cUF)
    {
        $this->cUF = $cUF;
        return $this;
    }

    /**
     * Gets as ano
     *
     * Ano de inutilização da numeração
     *
     * @return string
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Sets a new ano
     *
     * Ano de inutilização da numeração
     *
     * @param string $ano
     * @return self
     */
    public function setAno($ano)
    {
        $this->ano = $ano;
        return $this;
    }

    /**
     * Gets as cNPJ
     *
     * CNPJ do emitente
     *
     * @return string
     */
    public function getCNPJ()
    {
        return $this->cNPJ;
    }

    /**
     * Sets a new cNPJ
     *
     * CNPJ do emitente
     *
     * @param string $cNPJ
     * @return self
     */
    public function setCNPJ($cNPJ)
    {
        $this->cNPJ = $cNPJ;
        return $this;
    }

    /**
     * Gets as mod
     *
     * Modelo da NF-e (55, 65 etc.)
     *
     * @return string
     */
    public function getMod()
    {
        return $this->mod;
    }

    /**
     * Sets a new mod
     *
     * Modelo da NF-e (55, 65 etc.)
     *
     * @param string $mod
     * @return self
     */
    public function setMod($mod)
    {
        $this->mod = $mod;
        return $this;
    }

    /**
     * Gets as serie
     *
     * Série da NF-e
     *
     * @return string
     */
    public function getSerie()
    {
        return $this->serie;
    }

    /**
     * Sets a new serie
     *
     * Série da NF-e
     *
     * @param string $serie
     * @return self
     */
    public function setSerie($serie)
    {
        $this->serie = $serie;
        return $this;
    }

    /**
     * Gets as nNFIni
     *
     * Número da NF-e inicial
     *
     * @return string
     */
    public function getNNFIni()
    {
        return $this->nNFIni;
    }

    /**
     * Sets a new nNFIni
     *
     * Número da NF-e inicial
     *
     * @param string $nNFIni
     * @return self
     */
    public function setNNFIni($nNFIni)
    {
        $this->nNFIni = $nNFIni;
        return $this;
    }

    /**
     * Gets as nNFFin
     *
     * Número da NF-e final
     *
     * @return string
     */
    public function getNNFFin()
    {
        return $this->nNFFin;
    }

    /**
     * Sets a new nNFFin
     *
     * Número da NF-e final
     *
     * @param string $nNFFin
     * @return self
     */
    public function setNNFFin($nNFFin)
    {
        $this->nNFFin = $nNFFin;
        return $this;
    }

    /**
     * Gets as xJust
     *
     * Justificativa do pedido de inutilização
     *
     * @return string
     */
    public function getXJust()
    {
        return $this->xJust;
    }

    /**
     * Sets a new xJust
     *
     * Justificativa do pedido de inutilização
     *
     * @param string $xJust
     * @return self
     */
    public function setXJust($xJust)
    {
        $this->xJust = $xJust;
        return $this;
    }


}

