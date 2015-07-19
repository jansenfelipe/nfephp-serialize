<?php

namespace JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType;

/**
 * Class representing InfNFeAType
 */
class InfNFeAType
{

    /**
     * Versão do leiaute (v2.0)
     *
     * @property string $versao
     */
    private $versao = null;

    /**
     * PL_005d - 11/08/09 - validação do Id
     *
     * @property string $id
     */
    private $id = null;

    /**
     * identificação da NF-e
     *
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\IdeAType
     * $ide
     */
    private $ide = null;

    /**
     * Identificação do emitente
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\EmitAType $emit
     */
    private $emit = null;

    /**
     * Emissão de avulsa, informar os dados do Fisco emitente
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\AvulsaAType
     * $avulsa
     */
    private $avulsa = null;

    /**
     * Identificação do Destinatário
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DestAType $dest
     */
    private $dest = null;

    /**
     * Identificação do Local de Retirada (informar apenas quando for diferente do
     * endereço do remetente)
     *
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TLocalType $retirada
     */
    private $retirada = null;

    /**
     * Identificação do Local de Entrega (informar apenas quando for diferente do
     * endereço do destinatário)
     *
     * @property \JansenFelipe\NFePHPSerialize\NotaFiscal\TLocalType $entrega
     */
    private $entrega = null;

    /**
     * Pessoas autorizadas para o download do XML da NF-e
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\AutXMLAType[]
     * $autXML
     */
    private $autXML = null;

    /**
     * Dados dos detalhes da NF-e
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType[] $det
     */
    private $det = null;

    /**
     * Dados dos totais da NF-e
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TotalAType $total
     */
    private $total = null;

    /**
     * Dados dos transportes da NF-e
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TranspAType
     * $transp
     */
    private $transp = null;

    /**
     * Dados da cobrança da NF-e
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\CobrAType $cobr
     */
    private $cobr = null;

    /**
     * Dados de Pagamento. Obrigatório apenas para (NFC-e) NT 2012/004
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\PagAType[] $pag
     */
    private $pag = null;

    /**
     * Informações adicionais da NF-e
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\InfAdicAType
     * $infAdic
     */
    private $infAdic = null;

    /**
     * Informações de exportação
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\ExportaAType
     * $exporta
     */
    private $exporta = null;

    /**
     * Informações de compras (Nota de Empenho, Pedido e Contrato)
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\CompraAType
     * $compra
     */
    private $compra = null;

    /**
     * Informações de registro aquisições de cana
     *
     * @property
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\CanaAType $cana
     */
    private $cana = null;

    /**
     * Gets as versao
     *
     * Versão do leiaute (v2.0)
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
     * Versão do leiaute (v2.0)
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
     * Gets as id
     *
     * PL_005d - 11/08/09 - validação do Id
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
     * PL_005d - 11/08/09 - validação do Id
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
     * Gets as ide
     *
     * identificação da NF-e
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\IdeAType
     */
    public function getIde()
    {
        return $this->ide;
    }

    /**
     * Sets a new ide
     *
     * identificação da NF-e
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\IdeAType
     * $ide
     * @return self
     */
    public function setIde(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\IdeAType $ide)
    {
        $this->ide = $ide;
        return $this;
    }

    /**
     * Gets as emit
     *
     * Identificação do emitente
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\EmitAType
     */
    public function getEmit()
    {
        return $this->emit;
    }

    /**
     * Sets a new emit
     *
     * Identificação do emitente
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\EmitAType
     * $emit
     * @return self
     */
    public function setEmit(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\EmitAType $emit)
    {
        $this->emit = $emit;
        return $this;
    }

    /**
     * Gets as avulsa
     *
     * Emissão de avulsa, informar os dados do Fisco emitente
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\AvulsaAType
     */
    public function getAvulsa()
    {
        return $this->avulsa;
    }

    /**
     * Sets a new avulsa
     *
     * Emissão de avulsa, informar os dados do Fisco emitente
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\AvulsaAType
     * $avulsa
     * @return self
     */
    public function setAvulsa(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\AvulsaAType $avulsa)
    {
        $this->avulsa = $avulsa;
        return $this;
    }

    /**
     * Gets as dest
     *
     * Identificação do Destinatário
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DestAType
     */
    public function getDest()
    {
        return $this->dest;
    }

    /**
     * Sets a new dest
     *
     * Identificação do Destinatário
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DestAType
     * $dest
     * @return self
     */
    public function setDest(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DestAType $dest)
    {
        $this->dest = $dest;
        return $this;
    }

    /**
     * Gets as retirada
     *
     * Identificação do Local de Retirada (informar apenas quando for diferente do
     * endereço do remetente)
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TLocalType
     */
    public function getRetirada()
    {
        return $this->retirada;
    }

    /**
     * Sets a new retirada
     *
     * Identificação do Local de Retirada (informar apenas quando for diferente do
     * endereço do remetente)
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TLocalType $retirada
     * @return self
     */
    public function setRetirada(\JansenFelipe\NFePHPSerialize\NotaFiscal\TLocalType $retirada)
    {
        $this->retirada = $retirada;
        return $this;
    }

    /**
     * Gets as entrega
     *
     * Identificação do Local de Entrega (informar apenas quando for diferente do
     * endereço do destinatário)
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TLocalType
     */
    public function getEntrega()
    {
        return $this->entrega;
    }

    /**
     * Sets a new entrega
     *
     * Identificação do Local de Entrega (informar apenas quando for diferente do
     * endereço do destinatário)
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TLocalType $entrega
     * @return self
     */
    public function setEntrega(\JansenFelipe\NFePHPSerialize\NotaFiscal\TLocalType $entrega)
    {
        $this->entrega = $entrega;
        return $this;
    }

    /**
     * Adds as autXML
     *
     * Pessoas autorizadas para o download do XML da NF-e
     *
     * @return self
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\AutXMLAType
     * $autXML
     */
    public function addToAutXML(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\AutXMLAType $autXML)
    {
        $this->autXML[] = $autXML;
        return $this;
    }

    /**
     * isset autXML
     *
     * Pessoas autorizadas para o download do XML da NF-e
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAutXML($index)
    {
        return isset($this->autXML[$index]);
    }

    /**
     * unset autXML
     *
     * Pessoas autorizadas para o download do XML da NF-e
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAutXML($index)
    {
        unset($this->autXML[$index]);
    }

    /**
     * Gets as autXML
     *
     * Pessoas autorizadas para o download do XML da NF-e
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\AutXMLAType[]
     */
    public function getAutXML()
    {
        return $this->autXML;
    }

    /**
     * Sets a new autXML
     *
     * Pessoas autorizadas para o download do XML da NF-e
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\AutXMLAType[]
     * $autXML
     * @return self
     */
    public function setAutXML(array $autXML)
    {
        $this->autXML = $autXML;
        return $this;
    }

    /**
     * Adds as det
     *
     * Dados dos detalhes da NF-e
     *
     * @return self
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType
     * $det
     */
    public function addToDet(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType $det)
    {
        $this->det[] = $det;
        return $this;
    }

    /**
     * isset det
     *
     * Dados dos detalhes da NF-e
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDet($index)
    {
        return isset($this->det[$index]);
    }

    /**
     * unset det
     *
     * Dados dos detalhes da NF-e
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDet($index)
    {
        unset($this->det[$index]);
    }

    /**
     * Gets as det
     *
     * Dados dos detalhes da NF-e
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType[]
     */
    public function getDet()
    {
        return $this->det;
    }

    /**
     * Sets a new det
     *
     * Dados dos detalhes da NF-e
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\DetAType[]
     * $det
     * @return self
     */
    public function setDet(array $det)
    {
        $this->det = $det;
        return $this;
    }

    /**
     * Gets as total
     *
     * Dados dos totais da NF-e
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TotalAType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * Dados dos totais da NF-e
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TotalAType
     * $total
     * @return self
     */
    public function setTotal(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TotalAType $total)
    {
        $this->total = $total;
        return $this;
    }

    /**
     * Gets as transp
     *
     * Dados dos transportes da NF-e
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TranspAType
     */
    public function getTransp()
    {
        return $this->transp;
    }

    /**
     * Sets a new transp
     *
     * Dados dos transportes da NF-e
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TranspAType
     * $transp
     * @return self
     */
    public function setTransp(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\TranspAType $transp)
    {
        $this->transp = $transp;
        return $this;
    }

    /**
     * Gets as cobr
     *
     * Dados da cobrança da NF-e
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\CobrAType
     */
    public function getCobr()
    {
        return $this->cobr;
    }

    /**
     * Sets a new cobr
     *
     * Dados da cobrança da NF-e
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\CobrAType
     * $cobr
     * @return self
     */
    public function setCobr(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\CobrAType $cobr)
    {
        $this->cobr = $cobr;
        return $this;
    }

    /**
     * Adds as pag
     *
     * Dados de Pagamento. Obrigatório apenas para (NFC-e) NT 2012/004
     *
     * @return self
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\PagAType
     * $pag
     */
    public function addToPag(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\PagAType $pag)
    {
        $this->pag[] = $pag;
        return $this;
    }

    /**
     * isset pag
     *
     * Dados de Pagamento. Obrigatório apenas para (NFC-e) NT 2012/004
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPag($index)
    {
        return isset($this->pag[$index]);
    }

    /**
     * unset pag
     *
     * Dados de Pagamento. Obrigatório apenas para (NFC-e) NT 2012/004
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPag($index)
    {
        unset($this->pag[$index]);
    }

    /**
     * Gets as pag
     *
     * Dados de Pagamento. Obrigatório apenas para (NFC-e) NT 2012/004
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\PagAType[]
     */
    public function getPag()
    {
        return $this->pag;
    }

    /**
     * Sets a new pag
     *
     * Dados de Pagamento. Obrigatório apenas para (NFC-e) NT 2012/004
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\PagAType[]
     * $pag
     * @return self
     */
    public function setPag(array $pag)
    {
        $this->pag = $pag;
        return $this;
    }

    /**
     * Gets as infAdic
     *
     * Informações adicionais da NF-e
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\InfAdicAType
     */
    public function getInfAdic()
    {
        return $this->infAdic;
    }

    /**
     * Sets a new infAdic
     *
     * Informações adicionais da NF-e
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\InfAdicAType
     * $infAdic
     * @return self
     */
    public function setInfAdic(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\InfAdicAType $infAdic)
    {
        $this->infAdic = $infAdic;
        return $this;
    }

    /**
     * Gets as exporta
     *
     * Informações de exportação
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\ExportaAType
     */
    public function getExporta()
    {
        return $this->exporta;
    }

    /**
     * Sets a new exporta
     *
     * Informações de exportação
     *
     * @param
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\ExportaAType
     * $exporta
     * @return self
     */
    public function setExporta(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\ExportaAType $exporta)
    {
        $this->exporta = $exporta;
        return $this;
    }

    /**
     * Gets as compra
     *
     * Informações de compras (Nota de Empenho, Pedido e Contrato)
     *
     * @return
     * \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\CompraAType
     */
    public function getCompra()
    {
        return $this->compra;
    }

    /**
     * Sets a new compra
     *
     * Informações de compras (Nota de Empenho, Pedido e Contrato)
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\CompraAType
     * $compra
     * @return self
     */
    public function setCompra(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\CompraAType $compra)
    {
        $this->compra = $compra;
        return $this;
    }

    /**
     * Gets as cana
     *
     * Informações de registro aquisições de cana
     *
     * @return \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\CanaAType
     */
    public function getCana()
    {
        return $this->cana;
    }

    /**
     * Sets a new cana
     *
     * Informações de registro aquisições de cana
     *
     * @param \JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\CanaAType
     * $cana
     * @return self
     */
    public function setCana(\JansenFelipe\NFePHPSerialize\NotaFiscal\TNFeType\InfNFeAType\CanaAType $cana)
    {
        $this->cana = $cana;
        return $this;
    }


}

