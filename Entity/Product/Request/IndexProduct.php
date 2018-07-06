<?php

namespace Parasut\Entity\Product\Request;

use Parasut\Model;
use Parasut\Entity\Product\Response;

class IndexProduct extends Model\Product\Index
{
    const FILTER_NAME = 'name';
    const FILTER_CODE = 'code';
    const FILTERS = [
        self::FILTER_NAME,
        self::FILTER_CODE
    ];

    const SORT_ID = 'id';
    const SORT_NAME = 'name';
    const SORTS = [
        self::SORT_ID,
        self::SORT_NAME
    ];

    const INCLUDE_CATEGORY = 'category';
    const INCLUDES = [
        self::INCLUDE_CATEGORY
    ];

    protected $name;
    protected $code;
    protected $sort;
    protected $number;
    protected $size;
    protected $include;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
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
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param integer $number
     */
    public function setNumber($number)
    {
        $this->number = $number;
    }

    /**
     * @return integer
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param integer $size
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
     * @return Response\IndexProducts
     */
    public function send()
    {
        return parent::request($this);
    }
}