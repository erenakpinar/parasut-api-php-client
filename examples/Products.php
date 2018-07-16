<?php

namespace Parasut\Examples;

use Parasut\Entity\Product\Request\CreateProduct;
use Parasut\Entity\Product\Request\IndexProduct;
use Parasut\Entity\Product\Response;

class Products
{
    /**
     * @return Response\IndexProducts
     */
    public function index()
    {
        $product = new IndexProduct();
        $product->setCode('code');

        return $product->send();
    }

    /**
     * @return Response\CreateProduct
     */
    public function create()
    {
        $product = new CreateProduct();
        $product->setCode('A23B');
        $product->setName('Core');
        $product->setVatRate(18);
        $product->setUnit(1);
        $product->setCommunicationsTaxRate(1);
        $product->setArchived(false);
        $product->setListPrice(0);
        $product->setCurrency('TRL');
        $product->setBuyingPrice(0);
        $product->setBuyingCurrency('TRL');
        $product->setInventoryTracking(false);
        $product->setInitialStockCount(9000000);

        return $product->send();
    }
}