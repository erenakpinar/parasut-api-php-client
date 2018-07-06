<?php

namespace Parasut\Entity\EInvoice\Request;


use Parasut\Model\EInvoice\Create;
use Parasut\Entity\EInvoice\Response;

class CreateEInvoice extends Create
{
    const SCENARIO_BASIC = 'basic';
    const SCENARIO_COMMERCIAL = 'commercial';

    const SCENARIOS = [
        self::SCENARIO_BASIC,
        self::SCENARIO_COMMERCIAL
    ];

    protected $vat_withholding_code;
    protected $vat_exemption_reason_code;
    protected $vat_exemption_reason;
    protected $note;
    protected $scenario;
    protected $to;
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
     * @return mixed
     */
    public function getScenario()
    {
        return $this->scenario;
    }

    /**
     * @param mixed $scenario
     */
    public function setScenario($scenario)
    {
        if (in_array($scenario, self::SCENARIOS)) {
            $this->scenario = $scenario;
        }
    }

    /**
     * @return mixed
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * @param mixed $to
     */
    public function setTo($to)
    {
        $this->to = $to;
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
     * @return Response\CreateEInvoice
     */
    public function send()
    {
        return parent::request($this);
    }
}