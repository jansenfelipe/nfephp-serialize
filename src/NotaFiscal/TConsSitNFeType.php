<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TConsSitNFeType
 *
 * Tipo Pedido de Consulta da Situação Atual da Nota Fiscal Eletrônica
 * XSD Type: TConsSitNFe
 */
class TConsSitNFeType
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
     * Serviço Solicitado
     *
     * @property string $xServ
     */
    private $xServ = null;

    /**
     * Chaves de acesso da NF-e, compostas por: UF do emitente, AAMM da emissão da
     * NFe, CNPJ do emitente, modelo, série e número da NF-e e código numérico +
     * DV.
     *
     * @property string $chNFe
     */
    private $chNFe = null;

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


}

