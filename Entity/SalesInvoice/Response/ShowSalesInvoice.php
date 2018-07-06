<?php

namespace Parasut\Entity\SalesInvoice\Response;


use Parasut\Entity\RelationShipData;

class ShowSalesInvoice
{
    const E_INVOICES = 'e_invoices';
    const E_ARCHIVES = 'e_archives';

    protected $id;
    protected $archived;
    protected $invoice_no;
    protected $net_total;
    protected $gross_total;
    protected $withholding;
    protected $total_excise_duty;
    protected $total_communications_tax;
    protected $total_vat;
    protected $vat_withholding;
    protected $total_discount;
    protected $total_invoice_discount;
    protected $before_taxes_total;
    protected $remaining;
    protected $remaining_in_trl;
    protected $payment_status;
    protected $created_at;
    protected $updated_at;
    protected $item_type;
    protected $description;
    protected $issue_date;
    protected $due_date;
    protected $invoice_series;
    protected $invoice_id;
    protected $currency;
    protected $exchange_rate;
    protected $withholding_rate;
    protected $vat_withholding_rate;
    protected $invoice_discount_type;
    protected $invoice_discount;
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
    protected $category;
    protected $contact;
    protected $details;
    protected $payments;
    protected $tags;
    protected $sharings;
    protected $recurrence_plan;
    protected $active_e_document;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * @param mixed $archived
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;
    }

    /**
     * @return mixed
     */
    public function getInvoiceNo()
    {
        return $this->invoice_no;
    }

    /**
     * @param mixed $invoice_no
     */
    public function setInvoiceNo($invoice_no)
    {
        $this->invoice_no = $invoice_no;
    }

    /**
     * @return mixed
     */
    public function getNetTotal()
    {
        return $this->net_total;
    }

    /**
     * @param mixed $net_total
     */
    public function setNetTotal($net_total)
    {
        $this->net_total = $net_total;
    }

    /**
     * @return mixed
     */
    public function getGrossTotal()
    {
        return $this->gross_total;
    }

    /**
     * @param mixed $gross_total
     */
    public function setGrossTotal($gross_total)
    {
        $this->gross_total = $gross_total;
    }

    /**
     * @return mixed
     */
    public function getWithholding()
    {
        return $this->withholding;
    }

    /**
     * @param mixed $withholding
     */
    public function setWithholding($withholding)
    {
        $this->withholding = $withholding;
    }

    /**
     * @return mixed
     */
    public function getTotalExciseDuty()
    {
        return $this->total_excise_duty;
    }

    /**
     * @param mixed $total_excise_duty
     */
    public function setTotalExciseDuty($total_excise_duty)
    {
        $this->total_excise_duty = $total_excise_duty;
    }

    /**
     * @return mixed
     */
    public function getTotalCommunicationsTax()
    {
        return $this->total_communications_tax;
    }

    /**
     * @param mixed $total_communications_tax
     */
    public function setTotalCommunicationsTax($total_communications_tax)
    {
        $this->total_communications_tax = $total_communications_tax;
    }

    /**
     * @return mixed
     */
    public function getTotalVat()
    {
        return $this->total_vat;
    }

    /**
     * @param mixed $total_vat
     */
    public function setTotalVat($total_vat)
    {
        $this->total_vat = $total_vat;
    }

    /**
     * @return mixed
     */
    public function getVatWithholding()
    {
        return $this->vat_withholding;
    }

    /**
     * @param mixed $vat_withholding
     */
    public function setVatWithholding($vat_withholding)
    {
        $this->vat_withholding = $vat_withholding;
    }

    /**
     * @return mixed
     */
    public function getTotalDiscount()
    {
        return $this->total_discount;
    }

    /**
     * @param mixed $total_discount
     */
    public function setTotalDiscount($total_discount)
    {
        $this->total_discount = $total_discount;
    }

    /**
     * @return mixed
     */
    public function getTotalInvoiceDiscount()
    {
        return $this->total_invoice_discount;
    }

    /**
     * @param mixed $total_invoice_discount
     */
    public function setTotalInvoiceDiscount($total_invoice_discount)
    {
        $this->total_invoice_discount = $total_invoice_discount;
    }

    /**
     * @return mixed
     */
    public function getBeforeTaxesTotal()
    {
        return $this->before_taxes_total;
    }

    /**
     * @param mixed $before_taxes_total
     */
    public function setBeforeTaxesTotal($before_taxes_total)
    {
        $this->before_taxes_total = $before_taxes_total;
    }

    /**
     * @return mixed
     */
    public function getRemaining()
    {
        return $this->remaining;
    }

    /**
     * @param mixed $remaining
     */
    public function setRemaining($remaining)
    {
        $this->remaining = $remaining;
    }

    /**
     * @return mixed
     */
    public function getRemainingInTrl()
    {
        return $this->remaining_in_trl;
    }

    /**
     * @param mixed $remaining_in_trl
     */
    public function setRemainingInTrl($remaining_in_trl)
    {
        $this->remaining_in_trl = $remaining_in_trl;
    }

    /**
     * @return mixed
     */
    public function getPaymentStatus()
    {
        return $this->payment_status;
    }

    /**
     * @param mixed $payment_status
     */
    public function setPaymentStatus($payment_status)
    {
        $this->payment_status = $payment_status;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     */
    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @param mixed $updated_at
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
    }

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
        $this->item_type = $item_type;
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
        $this->currency = $currency;
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
        $this->invoice_discount_type = $invoice_discount_type;
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
     * @return RelationShipData
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param RelationShipData $category
     */
    public function setCategory(RelationShipData $category)
    {
        $this->category = $category;
    }

    /**
     * @return RelationShipData
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param RelationShipData $contact
     */
    public function setContact(RelationShipData $contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return RelationShipData[]
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param RelationShipData $detail
     */
    public function addDetail(RelationShipData $detail)
    {
        $this->details[] = $detail;
    }

    /**
     * @return RelationShipData[]
     */
    public function getPayments()
    {
        return $this->payments;
    }

    /**
     * @param RelationShipData $payment
     */
    public function addPayment(RelationShipData $payment)
    {
        $this->payments[] = $payment;
    }

    /**
     * @return RelationShipData[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param RelationShipData $tag
     */
    public function addTag(RelationShipData $tag)
    {
        $this->tags[] = $tag;
    }

    /**
     * @return RelationShipData[]
     */
    public function getSharings()
    {
        return $this->sharings;
    }

    /**
     * @param RelationShipData $sharing
     */
    public function addSharing(RelationShipData $sharing)
    {
        $this->sharings[] = $sharing;
    }

    /**
     * @return RelationShipData
     */
    public function getRecurrencePlan()
    {
        return $this->recurrence_plan;
    }

    /**
     * @param RelationShipData $recurrence_plan
     */
    public function setRecurrencePlan(RelationShipData $recurrence_plan)
    {
        $this->recurrence_plan = $recurrence_plan;
    }

    /**
     * @return RelationShipData
     */
    public function getActiveEDocument()
    {
        return $this->active_e_document;
    }

    /**
     * @param RelationShipData $active_e_document
     */
    public function setActiveEDocument(RelationShipData $active_e_document)
    {
        $this->active_e_document = $active_e_document;
    }
}