<?php

namespace Parasut\Entity\SalesInvoice\Request;


class CreateSalesInvoiceDetail
{
    const DISCOUNT_TYPE_PERCENTAGE = 'percentage';
    const DISCOUNT_TYPE_AMOUNT = 'amount';

    const DISCOUNT_TYPES = [
        self::DISCOUNT_TYPE_PERCENTAGE,
        self::DISCOUNT_TYPE_AMOUNT
    ];

    const EXCISE_DUTY_TYPE_PERCENTAGE = 'percentage';
    const EXCISE_DUTY_TYPE_AMOUNT = 'amount';

    const EXCISE_DUTY_TYPES = [
        self::EXCISE_DUTY_TYPE_PERCENTAGE,
        self::EXCISE_DUTY_TYPE_AMOUNT
    ];

    protected $product_id;
    protected $quantity = 1;
    protected $unit_price;
    protected $vat_rate;
    protected $discount_type = self::DISCOUNT_TYPE_PERCENTAGE;
    protected $discount_value = 0;
    protected $excise_duty_type = self::EXCISE_DUTY_TYPE_PERCENTAGE;
    protected $excise_duty_value = 0;
    protected $communications_tax_rate = 0;
    protected $description;

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return mixed
     */
    public function getUnitPrice()
    {
        return $this->unit_price;
    }

    /**
     * @param mixed $unit_price
     */
    public function setUnitPrice($unit_price)
    {
        $this->unit_price = $unit_price;
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
    public function getDiscountType()
    {
        return $this->discount_type;
    }

    /**
     * @param mixed $discount_type
     */
    public function setDiscountType($discount_type)
    {
        if (in_array($discount_type, self::DISCOUNT_TYPES)) {
            $this->discount_type = $discount_type;
        }
    }

    /**
     * @return mixed
     */
    public function getDiscountValue()
    {
        return $this->discount_value;
    }

    /**
     * @param mixed $discount_value
     */
    public function setDiscountValue($discount_value)
    {
        $this->discount_value = $discount_value;
    }

    /**
     * @return mixed
     */
    public function getExciseDutyType()
    {
        return $this->excise_duty_type;
    }

    /**
     * @param mixed $excise_duty_type
     */
    public function setExciseDutyType($excise_duty_type)
    {
        if (in_array($excise_duty_type, self::EXCISE_DUTY_TYPES)) {
            $this->excise_duty_type = $excise_duty_type;
        }
    }

    /**
     * @return mixed
     */
    public function getExciseDutyValue()
    {
        return $this->excise_duty_value;
    }

    /**
     * @param mixed $excise_duty_value
     */
    public function setExciseDutyValue($excise_duty_value)
    {
        $this->excise_duty_value = $excise_duty_value;
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
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     */
    public function setProductId($product_id)
    {
        $this->product_id = $product_id;
    }
}