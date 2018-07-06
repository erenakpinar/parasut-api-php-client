<?php

namespace Parasut\Entity\Contact\Request;

use Parasut\Model\Contact\Index;
use Parasut\Entity\Contact\Response;

class IndexContact extends Index
{
    const FILTER_NAME = 'name';
    const FILTER_EMAIL = 'email';
    const FILTER_TAX_NUMBER = 'tax_number';
    const FILTER_TAX_OFFICE = 'tax_office';
    const FILTER_CITY = 'city';

    const SORT_ID = 'id';
    const SORT_BALANCE = 'balance';
    const SORT_NAME = 'name';
    const SORT_EMAIL = 'email';

    const SORTS = [
        self::SORT_ID,
        self::SORT_BALANCE,
        self::SORT_NAME,
        self::SORT_EMAIL
    ];

    const INCLUDE_CATEGORY = 'category';
    const INCLUDE_CONTACT_PORTAL = 'contact_portal';
    const INCLUDE_CONTACT_PEOPLE = 'contact_people';

    const INCLUDES = [
        self::INCLUDE_CATEGORY,
        self::INCLUDE_CONTACT_PORTAL,
        self::INCLUDE_CONTACT_PEOPLE
    ];

    protected $name;
    protected $email;
    protected $tax_number;
    protected $tax_office;
    protected $city;
    protected $sort;
    protected $number;
    protected $size;
    protected $include;

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
    public function getSort()
    {
        if (count($this->sort) > 0) {
            return implode(', ', $this->sort);
        }
    }

    /**
     * @param $sort
     */
    public function addSort($sort)
    {
        if (in_array($sort, self::SORTS)) {
            $this->sort[] = $sort;
        }
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param mixed $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getInclude()
    {
        if (count($this->include) > 0) {
            return implode(', ', $this->include);
        }
    }

    /**
     * @param $include
     */
    public function addInclude($include)
    {
        if (in_array($include, self::INCLUDES)) {
            $this->include[] = $include;
        }
    }

    /**
     * @return Response\IndexContacts
     */
    public function send()
    {
        return parent::request($this);
    }
}