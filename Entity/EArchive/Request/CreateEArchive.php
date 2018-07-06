<?php

namespace Parasut\Entity\EArchive\Request;


use Parasut\Model\EArchive\Create;
use Parasut\Entity\EArchive\Response;

class CreateEArchive extends Create
{
    protected $vat_withholding_code;
    protected $vat_exemption_reason;
    protected $vat_exemption_reason_code;
    protected $note;
    protected $internet_sale;
    protected $sales_invoice_id;

    /**
     * @return mixed
     */
    public function getVatWithholdingCode()
    {
        return $this->vat_withholding_code;
    }

    /**
     * @param mixed $vat_withholding_code
     */
    public function setVatWithholdingCode($vat_withholding_code)
    {
        $this->vat_withholding_code = $vat_withholding_code;
    }

    /**
     * @return mixed
     */
    public function getVatExemptionReason()
    {
        return $this->vat_exemption_reason;
    }

    /**
     * @param mixed $vat_exemption_reason
     */
    public function setVatExemptionReason($vat_exemption_reason)
    {
        $this->vat_exemption_reason = $vat_exemption_reason;
    }

    /**
     * @return mixed
     */
    public function getVatExemptionReasonCode()
    {
        return $this->vat_exemption_reason_code;
    }

    /**
     * @param mixed $vat_exemption_reason_code
     */
    public function setVatExemptionReasonCode($vat_exemption_reason_code)
    {
        $this->vat_exemption_reason_code = $vat_exemption_reason_code;
    }

    /**
     * @return mixed
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param mixed $note
     */
    public function setNote($note)
    {
        $this->note = $note;
    }

    /**
     * @return CreateInternetSale
     */
    public function getInternetSale()
    {
        return $this->internet_sale;
    }

    /**
     * @param CreateInternetSale $internet_sale
     */
    public function setInternetSale(CreateInternetSale $internet_sale)
    {
        $this->internet_sale = $internet_sale;
    }

    /**
     * @return mixed
     */
    public function getSalesInvoiceId()
    {
        return $this->sales_invoice_id;
    }

    /**
     * @param mixed $sales_invoice_id
     */
    public function setSalesInvoiceId($sales_invoice_id)
    {
        $this->sales_invoice_id = $sales_invoice_id;
    }

    /**
     * @return Response\CreateEArchive
     */
    public function send()
    {
        return parent::request($this);
    }
}