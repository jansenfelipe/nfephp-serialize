<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TRetConsStatServType
 *
 * Tipo Resultado da Consulta do Status do Serviço
 * XSD Type: TRetConsStatServ
 */
class TRetConsStatServType
{

    /**
     * @property string $versao
     */
    private $versao = null;

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
     * Código da UF responsável pelo serviço
     *
     * @property string $cUF
     */
    private $cUF = null;

    /**
     * Data e hora do recebimento da consulta no formato AAAA-MM-DDTHH:MM:SSTZD
     *
     * @property string $dhRecbto
     */
    private $dhRecbto = null;

    /**
     * Tempo médio de resposta do serviço (em segundos) dos últimos 5 minutos
     *
     * @property string $tMed
     */
    private $tMed = null;

    /**
     * AAAA-MM-DDTHH:MM:SSDeve ser preenchida com data e hora previstas para o retorno
     * dos serviços prestados.
     *
     * @property string $dhRetorno
     */
    private $dhRetorno = null;

    /**
     * Campo observação utilizado para incluir informações ao contribuinte
     *
     * @property string $xObs
     */
    private $xObs = null;

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
     * Código da UF responsável pelo serviço
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
     * Código da UF responsável pelo serviço
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
     * Gets as dhRecbto
     *
     * Data e hora do recebimento da consulta no formato AAAA-MM-DDTHH:MM:SSTZD
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
     * Data e hora do recebimento da consulta no formato AAAA-MM-DDTHH:MM:SSTZD
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
     * Gets as tMed
     *
     * Tempo médio de resposta do serviço (em segundos) dos últimos 5 minutos
     *
     * @return string
     */
    public function getTMed()
    {
        return $this->tMed;
    }

    /**
     * Sets a new tMed
     *
     * Tempo médio de resposta do serviço (em segundos) dos últimos 5 minutos
     *
     * @param string $tMed
     * @return self
     */
    public function setTMed($tMed)
    {
        $this->tMed = $tMed;
        return $this;
    }

    /**
     * Gets as dhRetorno
     *
     * AAAA-MM-DDTHH:MM:SSDeve ser preenchida com data e hora previstas para o retorno
     * dos serviços prestados.
     *
     * @return string
     */
    public function getDhRetorno()
    {
        return $this->dhRetorno;
    }

    /**
     * Sets a new dhRetorno
     *
     * AAAA-MM-DDTHH:MM:SSDeve ser preenchida com data e hora previstas para o retorno
     * dos serviços prestados.
     *
     * @param string $dhRetorno
     * @return self
     */
    public function setDhRetorno($dhRetorno)
    {
        $this->dhRetorno = $dhRetorno;
        return $this;
    }

    /**
     * Gets as xObs
     *
     * Campo observação utilizado para incluir informações ao contribuinte
     *
     * @return string
     */
    public function getXObs()
    {
        return $this->xObs;
    }

    /**
     * Sets a new xObs
     *
     * Campo observação utilizado para incluir informações ao contribuinte
     *
     * @param string $xObs
     * @return self
     */
    public function setXObs($xObs)
    {
        $this->xObs = $xObs;
        return $this;
    }


}

