<?php

namespace Parasut\Entity\Product\Response;

class IndexProduct
{
    protected $id;
    protected $sales_excise_duty_code;
    protected $sales_invoice_details_count;
    protected $purchase_invoice_details_count;
    protected $list_price_in_trl;
    protected $buying_price_in_trl;
    protected $stock_count;
    protected $created_at;
    protected $updated_at;
    protected $code;
    protected $name;
    protected $vat_rate;
    protected $sales_excise_duty;
    protected $sales_excise_duty_type;
    protected $purchase_excise_duty;
    protected $purchase_excise_duty_type;
    protected $unit;
    protected $communications_tax_rate;
    protected $archived;
    protected $list_price;
    protected $currency;
    protected $buying_price;
    protected $buying_currency;
    protected $inventory_tracking;
    protected $initial_stock_count;
    protected $category;

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
    public function getSalesExciseDutyCode()
    {
        return $this->sales_excise_duty_code;
    }

    /**
     * @param mixed $sales_excise_duty_code
     */
    public function setSalesExciseDutyCode($sales_excise_duty_code)
    {
        $this->sales_excise_duty_code = $sales_excise_duty_code;
    }

    /**
     * @return mixed
     */
    public function getSalesInvoiceDetailsCount()
    {
        return $this->sales_invoice_details_count;
    }

    /**
     * @param mixed $sales_invoice_details_count
     */
    public function setSalesInvoiceDetailsCount($sales_invoice_details_count)
    {
        $this->sales_invoice_details_count = $sales_invoice_details_count;
    }

    /**
     * @return mixed
     */
    public function getPurchaseInvoiceDetailsCount()
    {
        return $this->purchase_invoice_details_count;
    }

    /**
     * @param mixed $purchase_invoice_details_count
     */
    public function setPurchaseInvoiceDetailsCount($purchase_invoice_details_count)
    {
        $this->purchase_invoice_details_count = $purchase_invoice_details_count;
    }

    /**
     * @return mixed
     */
    public function getListPriceInTrl()
    {
        return $this->list_price_in_trl;
    }

    /**
     * @param mixed $list_price_in_trl
     */
    public function setListPriceInTrl($list_price_in_trl)
    {
        $this->list_price_in_trl = $list_price_in_trl;
    }

    /**
     * @return mixed
     */
    public function getBuyingPriceInTrl()
    {
        return $this->buying_price_in_trl;
    }

    /**
     * @param mixed $buying_price_in_trl
     */
    public function setBuyingPriceInTrl($buying_price_in_trl)
    {
        $this->buying_price_in_trl = $buying_price_in_trl;
    }

    /**
     * @return mixed
     */
    public function getStockCount()
    {
        return $this->stock_count;
    }

    /**
     * @param mixed $stock_count
     */
    public function setStockCount($stock_count)
    {
        $this->stock_count = $stock_count;
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
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getVatRate()
    {
        return $this->vat_rate;
    }

    /**
     * @param mixed $vat_rate
     */
    public function setVatRate($vat_rate)
    {
        $this->vat_rate = $vat_rate;
    }

    /**
     * @return mixed
     */
    public function getSalesExciseDuty()
    {
        return $this->sales_excise_duty;
    }

    /**
     * @param mixed $sales_excise_duty
     */
    public function setSalesExciseDuty($sales_excise_duty)
    {
        $this->sales_excise_duty = $sales_excise_duty;
    }

    /**
     * @return mixed
     */
    public function getSalesExciseDutyType()
    {
        return $this->sales_excise_duty_type;
    }

    /**
     * @param mixed $sales_excise_duty_type
     */
    public function setSalesExciseDutyType($sales_excise_duty_type)
    {
        $this->sales_excise_duty_type = $sales_excise_duty_type;
    }

    /**
     * @return mixed
     */
    public function getPurchaseExciseDuty()
    {
        return $this->purchase_excise_duty;
    }

    /**
     * @param mixed $purchase_excise_duty
     */
    public function setPurchaseExciseDuty($purchase_excise_duty)
    {
        $this->purchase_excise_duty = $purchase_excise_duty;
    }

    /**
     * @return mixed
     */
    public function getPurchaseExciseDutyType()
    {
        return $this->purchase_excise_duty_type;
    }

    /**
     * @param mixed $purchase_excise_duty_type
     */
    public function setPurchaseExciseDutyType($purchase_excise_duty_type)
    {
        $this->purchase_excise_duty_type = $purchase_excise_duty_type;
    }

    /**
     * @return mixed
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param mixed $unit
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;
    }

    /**
     * @return mixed
     */
    public function getCommunicationsTaxRate()
    {
        return $this->communications_tax_rate;
    }

    /**
     * @param mixed $communications_tax_rate
     */
    public function setCommunicationsTaxRate($communications_tax_rate)
    {
        $this->communications_tax_rate = $communications_tax_rate;
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
    public function getListPrice()
    {
        return $this->list_price;
    }

    /**
     * @param mixed $list_price
     */
    public function setListPrice($list_price)
    {
        $this->list_price = $list_price;
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
    public function getBuyingPrice()
    {
        return $this->buying_price;
    }

    /**
     * @param mixed $buying_price
     */
    public function setBuyingPrice($buying_price)
    {
        $this->buying_price = $buying_price;
    }

    /**
     * @return mixed
     */
    public function getBuyingCurrency()
    {
        return $this->buying_currency;
    }

    /**
     * @param mixed $buying_currency
     */
    public function setBuyingCurrency($buying_currency)
    {
        $this->buying_currency = $buying_currency;
    }

    /**
     * @return mixed
     */
    public function getInventoryTracking()
    {
        return $this->inventory_tracking;
    }

    /**
     * @param mixed $inventory_tracking
     */
    public function setInventoryTracking($inventory_tracking)
    {
        $this->inventory_tracking = $inventory_tracking;
    }

    /**
     * @return mixed
     */
    public function getInitialStockCount()
    {
        return $this->initial_stock_count;
    }

    /**
     * @param mixed $initial_stock_count
     */
    public function setInitialStockCount($initial_stock_count)
    {
        $this->initial_stock_count = $initial_stock_count;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }
}