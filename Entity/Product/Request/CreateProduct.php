<?php

namespace Parasut\Entity\Product\Request;

use Parasut\Model\Product\Create;
use Parasut\Entity\Product\Response;

class CreateProduct extends Create
{
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
    protected $category_id;

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
     * @return Response\CreateProduct
     */
    public function send()
    {
        return parent::request($this);
    }
}