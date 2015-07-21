<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TRetConsSitNFeType
 *
 * Tipo Retorno de Pedido de Consulta da Situação Atual da Nota Fiscal
 * Eletrônica
 * XSD Type: TRetConsSitNFe
 */
class TRetConsSitNFeType
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
     * código da UF de atendimento
     *
     * @property string $cUF
     */
    private $cUF = null;

    /**
     * AAAA-MM-DDTHH:MM:SSTZD
     *
     * @property string $dhRecbto
     */
    private $dhRecbto = null;

    /**
     * Chaves de acesso da NF-e consultada
     *
     * @property string $chNFe
     */
    private $chNFe = null;

    /**
     * Protocolo de autorização de uso da NF-e
     *
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TProtNFeType $protNFe
     */
    private $protNFe = null;

    /**
     * Protocolo de homologação de cancelamento de uso da NF-e
     *
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetCancNFeType $retCancNFe
     */
    private $retCancNFe = null;

    /**
     * Protocolo de registro de evento da NF-e
     *
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TProcEventoType[]
     * $procEventoNFe
     */
    private $procEventoNFe = null;

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
     * código da UF de atendimento
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
     * código da UF de atendimento
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
     * AAAA-MM-DDTHH:MM:SSTZD
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
     * AAAA-MM-DDTHH:MM:SSTZD
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
     * Gets as chNFe
     *
     * Chaves de acesso da NF-e consultada
     *
     * @return string
     */
    public function getChNFe()
    {
        return $this->chNFe;
    }

    /**
     * Sets a new chNFe
     *
     * Chaves de acesso da NF-e consultada
     *
     * @param string $chNFe
     * @return self
     */
    public function setChNFe($chNFe)
    {
        $this->chNFe = $chNFe;
        return $this;
    }

    /**
     * Gets as protNFe
     *
     * Protocolo de autorização de uso da NF-e
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TProtNFeType
     */
    public function getProtNFe()
    {
        return $this->protNFe;
    }

    /**
     * Sets a new protNFe
     *
     * Protocolo de autorização de uso da NF-e
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TProtNFeType $protNFe
     * @return self
     */
    public function setProtNFe(\JansenFelipe\NFePHPSerialize\NotaFiscal\TProtNFeType $protNFe)
    {
        $this->protNFe = $protNFe;
        return $this;
    }

    /**
     * Gets as retCancNFe
     *
     * Protocolo de homologação de cancelamento de uso da NF-e
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetCancNFeType
     */
    public function getRetCancNFe()
    {
        return $this->retCancNFe;
    }

    /**
     * Sets a new retCancNFe
     *
     * Protocolo de homologação de cancelamento de uso da NF-e
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetCancNFeType $retCancNFe
     * @return self
     */
    public function setRetCancNFe(\JansenFelipe\NFePHPSerialize\NotaFiscal\TRetCancNFeType $retCancNFe)
    {
        $this->retCancNFe = $retCancNFe;
        return $this;
    }

    /**
     * Adds as procEventoNFe
     *
     * Protocolo de registro de evento da NF-e
     *
     * @return self
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TProcEventoType $procEventoNFe
     */
    public function addToProcEventoNFe(\JansenFelipe\NFePHPSerialize\NotaFiscal\TProcEventoType $procEventoNFe)
    {
        $this->procEventoNFe[] = $procEventoNFe;
        return $this;
    }

    /**
     * isset procEventoNFe
     *
     * Protocolo de registro de evento da NF-e
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProcEventoNFe($index)
    {
        return isset($this->procEventoNFe[$index]);
    }

    /**
     * unset procEventoNFe
     *
     * Protocolo de registro de evento da NF-e
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProcEventoNFe($index)
    {
        unset($this->procEventoNFe[$index]);
    }

    /**
     * Gets as procEventoNFe
     *
     * Protocolo de registro de evento da NF-e
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TProcEventoType[]
     */
    public function getProcEventoNFe()
    {
        return $this->procEventoNFe;
    }

    /**
     * Sets a new procEventoNFe
     *
     * Protocolo de registro de evento da NF-e
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TProcEventoType[] $procEventoNFe
     * @return self
     */
    public function setProcEventoNFe(array $procEventoNFe)
    {
        $this->procEventoNFe = $procEventoNFe;
        return $this;
    }


}

