<?php

namespace Parasut\Entity\SalesInvoice\Request;


use Parasut\Model\SalesInvoice\Show;
use Parasut\Entity\SalesInvoice\Response;

class ShowSalesInvoice extends Show
{
    const INCLUDE_CATEGORY = 'category';
    const INCLUDE_CONTACT = 'contact';
    const INCLUDE_DETAILS = 'details';
    const INCLUDE_PAYMENTS = 'payments';
    const INCLUDE_TAGS = 'tags';
    const INCLUDE_SHARINGS = 'sharings';
    const INCLUDE_RECURRENCE_PLAN = 'recurrence_plan';
    const INCLUDE_ACTIVE_E_DOCUMENT = 'active_e_document';


    const INCLUDES = [
        self::INCLUDE_CATEGORY,
        self::INCLUDE_CONTACT,
        self::INCLUDE_DETAILS,
        self::INCLUDE_PAYMENTS,
        self::INCLUDE_TAGS,
        self::INCLUDE_SHARINGS,
        self::INCLUDE_RECURRENCE_PLAN,
        self::INCLUDE_ACTIVE_E_DOCUMENT
    ];

    protected $id;
    protected $include;

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
     * @return Response\ShowSalesInvoice
     */
    public function send()
    {
        return parent::request($this);
    }
}