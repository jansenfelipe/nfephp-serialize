<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal\TRetEventoType;

/**
 * Class representing InfEventoAType
 */
class InfEventoAType
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
     * Versão do Aplicativo que recebeu o Evento
     *
     * @property string $verAplic
     */
    private $verAplic = null;

    /**
     * Código do órgão de recepção do Evento. Utilizar a Tabela do IBGE extendida,
     * utilizar 90 para identificar o Ambiente Nacional
     *
     * @property string $cOrgao
     */
    private $cOrgao = null;

    /**
     * Código do status da registro do Evento
     *
     * @property string $cStat
     */
    private $cStat = null;

    /**
     * Descrição literal do status do registro do Evento
     *
     * @property string $xMotivo
     */
    private $xMotivo = null;

    /**
     * Chave de Acesso NF-e vinculada
     *
     * @property string $chNFe
     */
    private $chNFe = null;

    /**
     * Tipo do Evento vinculado
     *
     * @property string $tpEvento
     */
    private $tpEvento = null;

    /**
     * Descrição do Evento
     *
     * @property string $xEvento
     */
    private $xEvento = null;

    /**
     * Seqüencial do evento
     *
     * @property string $nSeqEvento
     */
    private $nSeqEvento = null;

    /**
     * CNPJ Destinatário
     *
     * @property string $cNPJDest
     */
    private $cNPJDest = null;

    /**
     * CPF Destiantário
     *
     * @property string $cPFDest
     */
    private $cPFDest = null;

    /**
     * email do destinatário
     *
     * @property string $emailDest
     */
    private $emailDest = null;

    /**
     * Data e Hora de registro do evento formato UTC AAAA-MM-DDTHH:MM:SSTZD
     *
     * @property string $dhRegEvento
     */
    private $dhRegEvento = null;

    /**
     * Número do protocolo de registro do evento
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
     * Versão do Aplicativo que recebeu o Evento
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
     * Versão do Aplicativo que recebeu o Evento
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
     * Gets as cOrgao
     *
     * Código do órgão de recepção do Evento. Utilizar a Tabela do IBGE extendida,
     * utilizar 90 para identificar o Ambiente Nacional
     *
     * @return string
     */
    public function getCOrgao()
    {
        return $this->cOrgao;
    }

    /**
     * Sets a new cOrgao
     *
     * Código do órgão de recepção do Evento. Utilizar a Tabela do IBGE extendida,
     * utilizar 90 para identificar o Ambiente Nacional
     *
     * @param string $cOrgao
     * @return self
     */
    public function setCOrgao($cOrgao)
    {
        $this->cOrgao = $cOrgao;
        return $this;
    }

    /**
     * Gets as cStat
     *
     * Código do status da registro do Evento
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
     * Código do status da registro do Evento
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
     * Descrição literal do status do registro do Evento
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
     * Descrição literal do status do registro do Evento
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
     * Gets as chNFe
     *
     * Chave de Acesso NF-e vinculada
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
     * Chave de Acesso NF-e vinculada
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
     * Gets as tpEvento
     *
     * Tipo do Evento vinculado
     *
     * @return string
     */
    public function getTpEvento()
    {
        return $this->tpEvento;
    }

    /**
     * Sets a new tpEvento
     *
     * Tipo do Evento vinculado
     *
     * @param string $tpEvento
     * @return self
     */
    public function setTpEvento($tpEvento)
    {
        $this->tpEvento = $tpEvento;
        return $this;
    }

    /**
     * Gets as xEvento
     *
     * Descrição do Evento
     *
     * @return string
     */
    public function getXEvento()
    {
        return $this->xEvento;
    }

    /**
     * Sets a new xEvento
     *
     * Descrição do Evento
     *
     * @param string $xEvento
     * @return self
     */
    public function setXEvento($xEvento)
    {
        $this->xEvento = $xEvento;
        return $this;
    }

    /**
     * Gets as nSeqEvento
     *
     * Seqüencial do evento
     *
     * @return string
     */
    public function getNSeqEvento()
    {
        return $this->nSeqEvento;
    }

    /**
     * Sets a new nSeqEvento
     *
     * Seqüencial do evento
     *
     * @param string $nSeqEvento
     * @return self
     */
    public function setNSeqEvento($nSeqEvento)
    {
        $this->nSeqEvento = $nSeqEvento;
        return $this;
    }

    /**
     * Gets as cNPJDest
     *
     * CNPJ Destinatário
     *
     * @return string
     */
    public function getCNPJDest()
    {
        return $this->cNPJDest;
    }

    /**
     * Sets a new cNPJDest
     *
     * CNPJ Destinatário
     *
     * @param string $cNPJDest
     * @return self
     */
    public function setCNPJDest($cNPJDest)
    {
        $this->cNPJDest = $cNPJDest;
        return $this;
    }

    /**
     * Gets as cPFDest
     *
     * CPF Destiantário
     *
     * @return string
     */
    public function getCPFDest()
    {
        return $this->cPFDest;
    }

    /**
     * Sets a new cPFDest
     *
     * CPF Destiantário
     *
     * @param string $cPFDest
     * @return self
     */
    public function setCPFDest($cPFDest)
    {
        $this->cPFDest = $cPFDest;
        return $this;
    }

    /**
     * Gets as emailDest
     *
     * email do destinatário
     *
     * @return string
     */
    public function getEmailDest()
    {
        return $this->emailDest;
    }

    /**
     * Sets a new emailDest
     *
     * email do destinatário
     *
     * @param string $emailDest
     * @return self
     */
    public function setEmailDest($emailDest)
    {
        $this->emailDest = $emailDest;
        return $this;
    }

    /**
     * Gets as dhRegEvento
     *
     * Data e Hora de registro do evento formato UTC AAAA-MM-DDTHH:MM:SSTZD
     *
     * @return string
     */
    public function getDhRegEvento()
    {
        return $this->dhRegEvento;
    }

    /**
     * Sets a new dhRegEvento
     *
     * Data e Hora de registro do evento formato UTC AAAA-MM-DDTHH:MM:SSTZD
     *
     * @param string $dhRegEvento
     * @return self
     */
    public function setDhRegEvento($dhRegEvento)
    {
        $this->dhRegEvento = $dhRegEvento;
        return $this;
    }

    /**
     * Gets as nProt
     *
     * Número do protocolo de registro do evento
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
     * Número do protocolo de registro do evento
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

