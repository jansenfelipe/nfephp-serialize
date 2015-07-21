<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal\TRetCancNFeType;

/**
 * Class representing InfCancAType
 */
class InfCancAType
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
     * Versão do Aplicativo que processou o pedido de cancelamento
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
     * Chaves de acesso da NF-e, compostas por: UF do emitente, AAMM da emissão da
     * NFe, CNPJ do emitente, modelo, série e número da NF-e e código numérico +
     * DV.
     *
     * @property string $chNFe
     */
    private $chNFe = null;

    /**
     * Data e hora de recebimento, no formato AAAA-MM-DDTHH:MM:SS. Deve ser preenchida
     * com data e hora da gravação no Banco em caso de Confirmação.
     *
     * @property \DateTime $dhRecbto
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
     * Versão do Aplicativo que processou o pedido de cancelamento
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
     * Versão do Aplicativo que processou o pedido de cancelamento
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
     * Gets as chNFe
     *
     * Chaves de acesso da NF-e, compostas por: UF do emitente, AAMM da emissão da
     * NFe, CNPJ do emitente, modelo, série e número da NF-e e código numérico +
     * DV.
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
     * Chaves de acesso da NF-e, compostas por: UF do emitente, AAMM da emissão da
     * NFe, CNPJ do emitente, modelo, série e número da NF-e e código numérico +
     * DV.
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
     * Gets as dhRecbto
     *
     * Data e hora de recebimento, no formato AAAA-MM-DDTHH:MM:SS. Deve ser preenchida
     * com data e hora da gravação no Banco em caso de Confirmação.
     *
     * @return \DateTime
     */
    public function getDhRecbto()
    {
        return $this->dhRecbto;
    }

    /**
     * Sets a new dhRecbto
     *
     * Data e hora de recebimento, no formato AAAA-MM-DDTHH:MM:SS. Deve ser preenchida
     * com data e hora da gravação no Banco em caso de Confirmação.
     *
     * @param \DateTime $dhRecbto
     * @return self
     */
    public function setDhRecbto(\DateTime $dhRecbto)
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

