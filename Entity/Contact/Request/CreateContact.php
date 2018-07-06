<?php

namespace Parasut\Entity\Contact\Request;

use Parasut\Model\Contact\Create;
use Parasut\Entity\Contact\Response;

class CreateContact extends Create
{
    const CONTACT_TYPE_COMPANY = 'company';

    const ACCOUNT_TYPE_CUSTOMER = 'customer';

    protected $email;
    protected $name;
    protected $short_name;
    protected $contact_type;
    protected $tax_office;
    protected $tax_number;
    protected $district;
    protected $city;
    protected $address;
    protected $phone;
    protected $fax;
    protected $is_abroad = false;
    protected $archived = false;
    protected $iban;
    protected $account_type;
    protected $category_id;
    protected $contact_peoples;

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
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
    public function getShortName()
    {
        return $this->short_name;
    }

    /**
     * @param mixed $short_name
     */
    public function setShortName($short_name)
    {
        $this->short_name = $short_name;
    }

    /**
     * @return mixed
     */
    public function getContactType()
    {
        return $this->contact_type;
    }

    /**
     * @param mixed $contact_type
     */
    public function setContactType($contact_type)
    {
        $this->contact_type = $contact_type;
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
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
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
    public function getIban()
    {
        return $this->iban;
    }

    /**
     * @param mixed $iban
     */
    public function setIban($iban)
    {
        $this->iban = $iban;
    }

    /**
     * @return mixed
     */
    public function getAccountType()
    {
        return $this->account_type;
    }

    /**
     * @param mixed $account_type
     */
    public function setAccountType($account_type)
    {
        $this->account_type = $account_type;
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
     * @return CreateContactPeople[]
     */
    public function getContactPeoples()
    {
        return $this->contact_peoples;
    }

    /**
     * @param CreateContactPeople $contact_people
     */
    public function addContactPeople($contact_people)
    {
        $this->contact_peoples[] = $contact_people;
    }

    /**
     * @return Response\CreateContact
     */
    public function send()
    {
        return parent::request($this);
    }
}