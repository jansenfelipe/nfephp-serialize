<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TRetEventoType
 *
 * Tipo retorno do Evento
 * XSD Type: TRetEvento
 */
class TRetEventoType
{

    /**
     * @property string $versao
     */
    private $versao = null;

    /**
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetEventoType\InfEventoAType
     * $infEvento
     */
    private $infEvento = null;

    /**
     * @property \JansenFelipe\NFePHPSerialize\XMLDSig\Signature $signature
     */
    private $signature = null;

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
     * Gets as infEvento
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetEventoType\InfEventoAType
     */
    public function getInfEvento()
    {
        return $this->infEvento;
    }

    /**
     * Sets a new infEvento
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TRetEventoType\InfEventoAType
     * $infEvento
     * @return self
     */
    public function setInfEvento(\JansenFelipe\NFePHPSerialize\NotaFiscal\TRetEventoType\InfEventoAType $infEvento)
    {
        $this->infEvento = $infEvento;
        return $this;
    }

    /**
     * Gets as signature
     *
     * @return \JansenFelipe\NFePHPSerialize\XMLDSig\Signature
     */
    public function getSignature()
    {
        return $this->signature;
    }

    /**
     * Sets a new signature
     *
     * @param \JansenFelipe\NFePHPSerialize\XMLDSig\Signature $signature
     * @return self
     */
    public function setSignature(\JansenFelipe\NFePHPSerialize\XMLDSig\Signature $signature)
    {
        $this->signature = $signature;
        return $this;
    }


}

