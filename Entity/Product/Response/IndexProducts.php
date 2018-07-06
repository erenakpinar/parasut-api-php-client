<?php

namespace Parasut\Entity\Product\Response;

use Parasut\Entity\Response\Data;
use Parasut\Entity\Response\Meta;

class IndexProducts
{
    protected $productList;
    protected $included;
    protected $meta;

    /**
     * @return IndexProduct[]
     */
    public function getProductList()
    {
        return $this->productList;
    }

    /**
     * @param mixed $productList
     */
    public function setProductList($productList)
    {
        $this->productList = $productList;
    }

    /**
     * @param IndexProduct $product
     */
    public function addProduct($product)
    {
        $this->productList[] = $product;
    }

    /**
     * @return Data[]
     */
    public function getIncluded()
    {
        return $this->included;
    }

    /**
     * @param mixed $included
     */
    public function setIncluded($included)
    {
        $this->included = $included;
    }

    /**
     * @param Data $include
     */
    public function addIncluded($include)
    {
        $this->included[] = $include;
    }

    /**
     * @return Meta
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @param Meta $meta
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;
    }
}