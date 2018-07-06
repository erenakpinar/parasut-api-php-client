<?php

namespace Parasut\Entity\EInvoiceInboxes\Response;


class IndexEInvoiceInbox
{
    protected $id;
    protected $vkn;
    protected $e_invoice_address;
    protected $name;
    protected $inbox_type;
    protected $address_registered_at;
    protected $registered_at;
    protected $created_at;
    protected $updated_at;

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
    public function getVkn()
    {
        return $this->vkn;
    }

    /**
     * @param mixed $vkn
     */
    public function setVkn($vkn)
    {
        $this->vkn = $vkn;
    }

    /**
     * @return mixed
     */
    public function getEInvoiceAddress()
    {
        return $this->e_invoice_address;
    }

    /**
     * @param mixed $e_invoice_address
     */
    public function setEInvoiceAddress($e_invoice_address)
    {
        $this->e_invoice_address = $e_invoice_address;
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
    public function getInboxType()
    {
        return $this->inbox_type;
    }

    /**
     * @param mixed $inbox_type
     */
    public function setInboxType($inbox_type)
    {
        $this->inbox_type = $inbox_type;
    }

    /**
     * @return mixed
     */
    public function getAddressRegisteredAt()
    {
        return $this->address_registered_at;
    }

    /**
     * @param mixed $address_registered_at
     */
    public function setAddressRegisteredAt($address_registered_at)
    {
        $this->address_registered_at = $address_registered_at;
    }

    /**
     * @return mixed
     */
    public function getRegisteredAt()
    {
        return $this->registered_at;
    }

    /**
     * @param mixed $registered_at
     */
    public function setRegisteredAt($registered_at)
    {
        $this->registered_at = $registered_at;
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
}