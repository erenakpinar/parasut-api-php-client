<?php

namespace Parasut\Entity\Contact\Response;


class IndexContact
{
    protected $id;
    protected $balance;
    protected $trl_balance;
    protected $usd_balance;
    protected $eur_balance;
    protected $gbp_balance;
    protected $created_at;
    protected $updated_at;
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
    protected $is_abroad;
    protected $archived;
    protected $iban;
    protected $account_type;
    protected $category;
    protected $contact_portal;
    protected $contact_people;

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
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param mixed $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    /**
     * @return mixed
     */
    public function getTrlBalance()
    {
        return $this->trl_balance;
    }

    /**
     * @param mixed $trl_balance
     */
    public function setTrlBalance($trl_balance)
    {
        $this->trl_balance = $trl_balance;
    }

    /**
     * @return mixed
     */
    public function getUsdBalance()
    {
        return $this->usd_balance;
    }

    /**
     * @param mixed $usd_balance
     */
    public function setUsdBalance($usd_balance)
    {
        $this->usd_balance = $usd_balance;
    }

    /**
     * @return mixed
     */
    public function getEurBalance()
    {
        return $this->eur_balance;
    }

    /**
     * @param mixed $eur_balance
     */
    public function setEurBalance($eur_balance)
    {
        $this->eur_balance = $eur_balance;
    }

    /**
     * @return mixed
     */
    public function getGbpBalance()
    {
        return $this->gbp_balance;
    }

    /**
     * @param mixed $gbp_balance
     */
    public function setGbpBalance($gbp_balance)
    {
        $this->gbp_balance = $gbp_balance;
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

    /**
     * @return mixed
     */
    public function getContactPortal()
    {
        return $this->contact_portal;
    }

    /**
     * @param mixed $contact_portal
     */
    public function setContactPortal($contact_portal)
    {
        $this->contact_portal = $contact_portal;
    }

    /**
     * @return mixed
     */
    public function getContactPeople()
    {
        return $this->contact_people;
    }

    /**
     * @param mixed $contact_people
     */
    public function setContactPeople($contact_people)
    {
        $this->contact_people = $contact_people;
    }
}