<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal\TEventoType;

/**
 * Class representing InfEventoAType
 */
class InfEventoAType
{

    /**
     * Identificador da TAG a ser assinada, a regra de formação do Id é:
     * “ID” + tpEvento + chave da NF-e + nSeqEvento
     *
     * @property string $id
     */
    private $id = null;

    /**
     * Código do órgão de recepção do Evento. Utilizar a Tabela do IBGE extendida,
     * utilizar 90 para identificar o Ambiente Nacional
     *
     * @property string $cOrgao
     */
    private $cOrgao = null;

    /**
     * Identificação do Ambiente:
     * 1 - Produção
     * 2 - Homologação
     *
     * @property string $tpAmb
     */
    private $tpAmb = null;

    /**
     * CNPJ
     *
     * @property string $cNPJ
     */
    private $cNPJ = null;

    /**
     * CPF
     *
     * @property string $cPF
     */
    private $cPF = null;

    /**
     * Chave de Acesso da NF-e vinculada ao evento
     *
     * @property string $chNFe
     */
    private $chNFe = null;

    /**
     * Data e Hora do Evento, formato UTC (AAAA-MM-DDThh:mm:ssTZD, onde TZD = +hh:mm ou
     * -hh:mm)
     *
     * @property string $dhEvento
     */
    private $dhEvento = null;

    /**
     * Tipo do Evento
     *
     * @property string $tpEvento
     */
    private $tpEvento = null;

    /**
     * Seqüencial do evento para o mesmo tipo de evento. Para maioria dos eventos
     * será 1, nos casos em que possa existir mais de um evento, como é o caso da
     * carta de correção, o autor do evento deve numerar de forma seqüencial.
     *
     * @property string $nSeqEvento
     */
    private $nSeqEvento = null;

    /**
     * Versão do Tipo do Evento
     *
     * @property string $verEvento
     */
    private $verEvento = null;

    /**
     * Detalhe Específico do Evento
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TEventoType\InfEventoAType\DetEventoAType
     * $detEvento
     */
    private $detEvento = null;

    /**
     * Gets as id
     *
     * Identificador da TAG a ser assinada, a regra de formação do Id é:
     * “ID” + tpEvento + chave da NF-e + nSeqEvento
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
     * Identificador da TAG a ser assinada, a regra de formação do Id é:
     * “ID” + tpEvento + chave da NF-e + nSeqEvento
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
     * Gets as cNPJ
     *
     * CNPJ
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
     * CNPJ
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
     * Gets as cPF
     *
     * CPF
     *
     * @return string
     */
    public function getCPF()
    {
        return $this->cPF;
    }

    /**
     * Sets a new cPF
     *
     * CPF
     *
     * @param string $cPF
     * @return self
     */
    public function setCPF($cPF)
    {
        $this->cPF = $cPF;
        return $this;
    }

    /**
     * Gets as chNFe
     *
     * Chave de Acesso da NF-e vinculada ao evento
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
     * Chave de Acesso da NF-e vinculada ao evento
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
     * Gets as dhEvento
     *
     * Data e Hora do Evento, formato UTC (AAAA-MM-DDThh:mm:ssTZD, onde TZD = +hh:mm ou
     * -hh:mm)
     *
     * @return string
     */
    public function getDhEvento()
    {
        return $this->dhEvento;
    }

    /**
     * Sets a new dhEvento
     *
     * Data e Hora do Evento, formato UTC (AAAA-MM-DDThh:mm:ssTZD, onde TZD = +hh:mm ou
     * -hh:mm)
     *
     * @param string $dhEvento
     * @return self
     */
    public function setDhEvento($dhEvento)
    {
        $this->dhEvento = $dhEvento;
        return $this;
    }

    /**
     * Gets as tpEvento
     *
     * Tipo do Evento
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
     * Tipo do Evento
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
     * Gets as nSeqEvento
     *
     * Seqüencial do evento para o mesmo tipo de evento. Para maioria dos eventos
     * será 1, nos casos em que possa existir mais de um evento, como é o caso da
     * carta de correção, o autor do evento deve numerar de forma seqüencial.
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
     * Seqüencial do evento para o mesmo tipo de evento. Para maioria dos eventos
     * será 1, nos casos em que possa existir mais de um evento, como é o caso da
     * carta de correção, o autor do evento deve numerar de forma seqüencial.
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
     * Gets as verEvento
     *
     * Versão do Tipo do Evento
     *
     * @return string
     */
    public function getVerEvento()
    {
        return $this->verEvento;
    }

    /**
     * Sets a new verEvento
     *
     * Versão do Tipo do Evento
     *
     * @param string $verEvento
     * @return self
     */
    public function setVerEvento($verEvento)
    {
        $this->verEvento = $verEvento;
        return $this;
    }

    /**
     * Gets as detEvento
     *
     * Detalhe Específico do Evento
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TEventoType\InfEventoAType\DetEventoAType
     */
    public function getDetEvento()
    {
        return $this->detEvento;
    }

    /**
     * Sets a new detEvento
     *
     * Detalhe Específico do Evento
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TEventoType\InfEventoAType\DetEventoAType
     * $detEvento
     * @return self
     */
    public function setDetEvento(\JansenFelipe\NFePHPSerialize\NotaFiscal\TEventoType\InfEventoAType\DetEventoAType $detEvento)
    {
        $this->detEvento = $detEvento;
        return $this;
    }


}

