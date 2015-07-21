<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal\TRetInutNFeType;

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
     * Versão do Aplicativo que processou a NF-e
     *
     * @property string $verAplic
     */
    private $verAplic = null;

    /**
     * Código do status da mensagem enviada.
     *
     * @property string $cStat
     */
    private $cStat = null;

    /**
     * Descrição literal do status do serviço solicitado.
     *
     * @property string $xMotivo
     */
    private $xMotivo = null;

    /**
     * Código da UF que atendeu a solicitação
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
     * Modelo da NF-e (55, etc.)
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
     * Data e hora de recebimento, no formato AAAA-MM-DDTHH:MM:SS. Deve ser preenchida
     * com data e hora da gravação no Banco em caso de Confirmação. Em caso de
     * Rejeição, com data e hora do recebimento do Pedido de Inutilização.
     *
     * @property string $dhRecbto
     */
    private $dhRecbto = null;

    /**
     * Número do Protocolo de Status da NF-e. 1 posição (1 – Secretaria de Fazenda
     * Estadual 2 – Receita Federal); 2 - código da UF - 2 posições ano; 10
     * seqüencial no ano.
     *
     * @property string $nProt
     */
    private $nProt = null;

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
     * Gets as verAplic
     *
     * Versão do Aplicativo que processou a NF-e
     *
     * @return string
     */
    public function getVerAplic()
    {
        return $this->verAplic;
    }

    /**
     * Sets a new verAplic
     *
     * Versão do Aplicativo que processou a NF-e
     *
     * @param string $verAplic
     * @return self
     */
    public function setVerAplic($verAplic)
    {
        $this->verAplic = $verAplic;
        return $this;
    }

    /**
     * Gets as cStat
     *
     * Código do status da mensagem enviada.
     *
     * @return string
     */
    public function getCStat()
    {
        return $this->cStat;
    }

    /**
     * Sets a new cStat
     *
     * Código do status da mensagem enviada.
     *
     * @param string $cStat
     * @return self
     */
    public function setCStat($cStat)
    {
        $this->cStat = $cStat;
        return $this;
    }

    /**
     * Gets as xMotivo
     *
     * Descrição literal do status do serviço solicitado.
     *
     * @return string
     */
    public function getXMotivo()
    {
        return $this->xMotivo;
    }

    /**
     * Sets a new xMotivo
     *
     * Descrição literal do status do serviço solicitado.
     *
     * @param string $xMotivo
     * @return self
     */
    public function setXMotivo($xMotivo)
    {
        $this->xMotivo = $xMotivo;
        return $this;
    }

    /**
     * Gets as cUF
     *
     * Código da UF que atendeu a solicitação
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
     * Código da UF que atendeu a solicitação
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
     * Modelo da NF-e (55, etc.)
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
     * Modelo da NF-e (55, etc.)
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
     * Gets as dhRecbto
     *
     * Data e hora de recebimento, no formato AAAA-MM-DDTHH:MM:SS. Deve ser preenchida
     * com data e hora da gravação no Banco em caso de Confirmação. Em caso de
     * Rejeição, com data e hora do recebimento do Pedido de Inutilização.
     *
     * @return string
     */
    public function getDhRecbto()
    {
        return $this->dhRecbto;
    }

    /**
     * Sets a new dhRecbto
     *
     * Data e hora de recebimento, no formato AAAA-MM-DDTHH:MM:SS. Deve ser preenchida
     * com data e hora da gravação no Banco em caso de Confirmação. Em caso de
     * Rejeição, com data e hora do recebimento do Pedido de Inutilização.
     *
     * @param string $dhRecbto
     * @return self
     */
    public function setDhRecbto($dhRecbto)
    {
        $this->dhRecbto = $dhRecbto;
        return $this;
    }

    /**
     * Gets as nProt
     *
     * Número do Protocolo de Status da NF-e. 1 posição (1 – Secretaria de Fazenda
     * Estadual 2 – Receita Federal); 2 - código da UF - 2 posições ano; 10
     * seqüencial no ano.
     *
     * @return string
     */
    public function getNProt()
    {
        return $this->nProt;
    }

    /**
     * Sets a new nProt
     *
     * Número do Protocolo de Status da NF-e. 1 posição (1 – Secretaria de Fazenda
     * Estadual 2 – Receita Federal); 2 - código da UF - 2 posições ano; 10
     * seqüencial no ano.
     *
     * @param string $nProt
     * @return self
     */
    public function setNProt($nProt)
    {
        $this->nProt = $nProt;
        return $this;
    }


}

