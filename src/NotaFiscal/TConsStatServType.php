<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal;

/**
 * Class representing TConsStatServType
 *
 * Tipo Pedido de Consulta do Status do Serviço
 * XSD Type: TConsStatServ
 */
class TConsStatServType
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
     * Sigla da UF consultada
     *
     * @property string $cUF
     */
    private $cUF = null;

    /**
     * Serviço Solicitado
     *
     * @property string $xServ
     */
    private $xServ = null;

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
     * Gets as cUF
     *
     * Sigla da UF consultada
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
     * Sigla da UF consultada
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


}

