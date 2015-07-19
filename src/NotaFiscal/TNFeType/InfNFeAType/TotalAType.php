<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType;

/**
 * Class representing TotalAType
 */
class TotalAType
{

    /**
     * Totais referentes ao ICMS
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TotalAType\ICMSTotAType
     * $iCMSTot
     */
    private $iCMSTot = null;

    /**
     * Totais referentes ao ISSQN
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TotalAType\ISSQNtotAType
     * $iSSQNtot
     */
    private $iSSQNtot = null;

    /**
     * Retenção de Tributos Federais
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TotalAType\RetTribAType
     * $retTrib
     */
    private $retTrib = null;

    /**
     * Gets as iCMSTot
     *
     * Totais referentes ao ICMS
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TotalAType\ICMSTotAType
     */
    public function getICMSTot()
    {
        return $this->iCMSTot;
    }

    /**
     * Sets a new iCMSTot
     *
     * Totais referentes ao ICMS
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TotalAType\ICMSTotAType
     * $iCMSTot
     * @return self
     */
    public function setICMSTot(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TotalAType\ICMSTotAType $iCMSTot)
    {
        $this->iCMSTot = $iCMSTot;
        return $this;
    }

    /**
     * Gets as iSSQNtot
     *
     * Totais referentes ao ISSQN
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TotalAType\ISSQNtotAType
     */
    public function getISSQNtot()
    {
        return $this->iSSQNtot;
    }

    /**
     * Sets a new iSSQNtot
     *
     * Totais referentes ao ISSQN
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TotalAType\ISSQNtotAType
     * $iSSQNtot
     * @return self
     */
    public function setISSQNtot(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TotalAType\ISSQNtotAType $iSSQNtot)
    {
        $this->iSSQNtot = $iSSQNtot;
        return $this;
    }

    /**
     * Gets as retTrib
     *
     * Retenção de Tributos Federais
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TotalAType\RetTribAType
     */
    public function getRetTrib()
    {
        return $this->retTrib;
    }

    /**
     * Sets a new retTrib
     *
     * Retenção de Tributos Federais
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TotalAType\RetTribAType
     * $retTrib
     * @return self
     */
    public function setRetTrib(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TotalAType\RetTribAType $retTrib)
    {
        $this->retTrib = $retTrib;
        return $this;
    }


}

