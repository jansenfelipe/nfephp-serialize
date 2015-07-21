<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TProcEventoType
 *
 * Tipo procEvento
 * XSD Type: TProcEvento
 */
class TProcEventoType
{

    /**
     * @property string $versao
     */
    private $versao = null;

    /**
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TEventoType $evento
     */
    private $evento = null;

    /**
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetEventoType $retEvento
     */
    private $retEvento = null;

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
     * Gets as evento
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TEventoType
     */
    public function getEvento()
    {
        return $this->evento;
    }

    /**
     * Sets a new evento
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TEventoType $evento
     * @return self
     */
    public function setEvento(\JansenFelipe\NFePHPSerialize\NotaFiscal\TEventoType $evento)
    {
        $this->evento = $evento;
        return $this;
    }

    /**
     * Gets as retEvento
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetEventoType
     */
    public function getRetEvento()
    {
        return $this->retEvento;
    }

    /**
     * Sets a new retEvento
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetEventoType $retEvento
     * @return self
     */
    public function setRetEvento(\JansenFelipe\NFePHPSerialize\NotaFiscal\TRetEventoType $retEvento)
    {
        $this->retEvento = $retEvento;
        return $this;
    }


}

