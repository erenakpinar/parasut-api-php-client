<?php

namespace Parasut\Entity\SalesInvoice\Request;

use Parasut\Model\SalesInvoice\Create;
use Parasut\Entity\SalesInvoice\Response;

class CreateSalesInvoice extends Create
{

    const ITEM_TYPE_INVOICE = 'invoice';
    const ITEM_TYPE_ESTIMATE = 'estimate';
    const ITEM_TYPE_CANCELLED = 'cancelled';
    const ITEM_TYPE_RECURRING_INVOICE = 'recurring_invoice';
    const ITEM_TYPE_RECURRING_ESTIMATE = 'recurring_estimate';
    const ITEM_TYPE_REFUND = 'refund';

    const ITEM_TYPES = [
        self::ITEM_TYPE_INVOICE,
        self::ITEM_TYPE_ESTIMATE,
        self::ITEM_TYPE_CANCELLED,
        self::ITEM_TYPE_RECURRING_INVOICE,
        self::ITEM_TYPE_RECURRING_ESTIMATE,
        self::ITEM_TYPE_REFUND
    ];

    const CURRENCY_TYPE_TRL = 'TRL';
    const CURRENCY_TYPE_USD = 'USD';
    const CURRENCY_TYPE_EUR = 'EUR';
    const CURRENCY_TYPE_GBP = 'GBP';

    const CURRENCY_TYPES = [
        self::CURRENCY_TYPE_TRL,
        self::CURRENCY_TYPE_USD,
        self::CURRENCY_TYPE_EUR,
        self::CURRENCY_TYPE_GBP
    ];

    const INVOICE_DISCOUNT_TYPE_PERCENTAGE = 'percentage';
    const INVOICE_DISCOUNT_TYPE_AMOUNT = 'amount';

    const INVOICE_DISCOUNT_TYPES = [
        self::INVOICE_DISCOUNT_TYPE_PERCENTAGE,
        self::INVOICE_DISCOUNT_TYPE_AMOUNT
    ];

    protected $item_type;
    protected $description;
    protected $issue_date;
    protected $due_date;
    protected $invoice_series;
    protected $invoice_id;
    protected $currency = self::CURRENCY_TYPE_TRL;
    protected $exchange_rate = 0;
    protected $withholding_rate = 0;
    protected $vat_withholding_rate = 0;
    protected $invoice_discount_type = self::INVOICE_DISCOUNT_TYPE_PERCENTAGE;
    protected $invoice_discount = 0;
    protected $billing_address;
    protected $billing_phone;
    protected $billing_fax;
    protected $tax_office;
    protected $tax_number;
    protected $city;
    protected $district;
    protected $is_abroad;
    protected $order_no;
    protected $order_date;
    protected $shipment_addres;
    protected $details;
    protected $contact_id;
    protected $category_id;
    protected $tags;

    /**
     * @return mixed
     */
    public function getItemType()
    {
        return $this->item_type;
    }

    /**
     * @param mixed $item_type
     */
    public function setItemType($item_type)
    {
        if (in_array($item_type, self::ITEM_TYPES)) {
            $this->item_type = $item_type;
        }
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getIssueDate()
    {
        return $this->issue_date;
    }

    /**
     * @param mixed $issue_date
     */
    public function setIssueDate($issue_date)
    {
        $this->issue_date = $issue_date;
    }

    /**
     * @return mixed
     */
    public function getDueDate()
    {
        return $this->due_date;
    }

    /**
     * @param mixed $due_date
     */
    public function setDueDate($due_date)
    {
        $this->due_date = $due_date;
    }

    /**
     * @return mixed
     */
    public function getInvoiceSeries()
    {
        return $this->invoice_series;
    }

    /**
     * @param mixed $invoice_series
     */
    public function setInvoiceSeries($invoice_series)
    {
        $this->invoice_series = $invoice_series;
    }

    /**
     * @return mixed
     */
    public function getInvoiceId()
    {
        return $this->invoice_id;
    }

    /**
     * @param mixed $invoice_id
     */
    public function setInvoiceId($invoice_id)
    {
        $this->invoice_id = $invoice_id;
    }

    /**
     * @return mixed
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param mixed $currency
     */
    public function setCurrency($currency)
    {
        if (in_array($currency, self::CURRENCY_TYPES)) {
            $this->currency = $currency;
        }
    }

    /**
     * @return mixed
     */
    public function getExchangeRate()
    {
        return $this->exchange_rate;
    }

    /**
     * @param mixed $exchange_rate
     */
    public function setExchangeRate($exchange_rate)
    {
        $this->exchange_rate = $exchange_rate;
    }

    /**
     * @return mixed
     */
    public function getWithholdingRate()
    {
        return $this->withholding_rate;
    }

    /**
     * @param mixed $withholding_rate
     */
    public function setWithholdingRate($withholding_rate)
    {
        $this->withholding_rate = $withholding_rate;
    }

    /**
     * @return mixed
     */
    public function getVatWithholdingRate()
    {
        return $this->vat_withholding_rate;
    }

    /**
     * @param mixed $vat_withholding_rate
     */
    public function setVatWithholdingRate($vat_withholding_rate)
    {
        $this->vat_withholding_rate = $vat_withholding_rate;
    }

    /**
     * @return mixed
     */
    public function getInvoiceDiscountType()
    {
        return $this->invoice_discount_type;
    }

    /**
     * @param mixed $invoice_discount_type
     */
    public function setInvoiceDiscountType($invoice_discount_type)
    {
        if (in_array($invoice_discount_type, self::INVOICE_DISCOUNT_TYPES)) {
            $this->invoice_discount_type = $invoice_discount_type;
        }
    }

    /**
     * @return mixed
     */
    public function getInvoiceDiscount()
    {
        return $this->invoice_discount;
    }

    /**
     * @param mixed $invoice_discount
     */
    public function setInvoiceDiscount($invoice_discount)
    {
        $this->invoice_discount = $invoice_discount;
    }

    /**
     * @return mixed
     */
    public function getBillingAddress()
    {
        return $this->billing_address;
    }

    /**
     * @param mixed $billing_address
     */
    public function setBillingAddress($billing_address)
    {
        $this->billing_address = $billing_address;
    }

    /**
     * @return mixed
     */
    public function getBillingPhone()
    {
        return $this->billing_phone;
    }

    /**
     * @param mixed $billing_phone
     */
    public function setBillingPhone($billing_phone)
    {
        $this->billing_phone = $billing_phone;
    }

    /**
     * @return mixed
     */
    public function getBillingFax()
    {
        return $this->billing_fax;
    }

    /**
     * @param mixed $billing_fax
     */
    public function setBillingFax($billing_fax)
    {
        $this->billing_fax = $billing_fax;
    }

    /**
     * @return mixed
     */
    public function getTaxOffice()
    {
        return $this->tax_office;
    }

    /**
     * @param mixed $tax_office
     */
    public function setTaxOffice($tax_office)
    {
        $this->tax_office = $tax_office;
    }

    /**
     * @return mixed
     */
    public function getTaxNumber()
    {
        return $this->tax_number;
    }

    /**
     * @param mixed $tax_number
     */
    public function setTaxNumber($tax_number)
    {
        $this->tax_number = $tax_number;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return mixed
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param mixed $district
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    }

    /**
     * @return mixed
     */
    public function getisAbroad()
    {
        return $this->is_abroad;
    }

    /**
     * @param mixed $is_abroad
     */
    public function setIsAbroad($is_abroad)
    {
        $this->is_abroad = $is_abroad;
    }

    /**
     * @return mixed
     */
    public function getOrderNo()
    {
        return $this->order_no;
    }

    /**
     * @param mixed $order_no
     */
    public function setOrderNo($order_no)
    {
        $this->order_no = $order_no;
    }

    /**
     * @return mixed
     */
    public function getOrderDate()
    {
        return $this->order_date;
    }

    /**
     * @param mixed $order_date
     */
    public function setOrderDate($order_date)
    {
        $this->order_date = $order_date;
    }

    /**
     * @return mixed
     */
    public function getShipmentAddres()
    {
        return $this->shipment_addres;
    }

    /**
     * @param mixed $shipment_addres
     */
    public function setShipmentAddres($shipment_addres)
    {
        $this->shipment_addres = $shipment_addres;
    }

    /**
     * @return CreateSalesInvoiceDetail[]
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param CreateSalesInvoiceDetail $detail
     */
    public function addDetail($detail)
    {
        $this->details[] = $detail;
    }

    /**
     * @return mixed
     */
    public function getContactId()
    {
        return $this->contact_id;
    }

    /**
     * @param mixed $contact_id
     */
    public function setContactId($contact_id)
    {
        $this->contact_id = $contact_id;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id)
    {
        $this->category_id = $category_id;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return (array)$this->tags;
    }

    /**
     * @param mixed $tag
     */
    public function addTagId($tag)
    {
        $this->tags[] = $tag;
    }

    /**
     * @return Response\CreateSalesInvoice
     */
    public function send()
    {
        return parent::request($this);
    }
}