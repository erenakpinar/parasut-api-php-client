<?php

namespace Parasut\Model\Product;

use Parasut\Entity\Product\Request\CreateProduct;
use Parasut\Entity\RelationShipData;
use Parasut\Service\Products;
use Parasut\Entity\Product\Response;

class Create extends Products
{
    const RELATIONSHIP_ITEM_CATEGORIES = 'item_categories';

    /**
     * @param CreateProduct $product
     * @return Response\CreateProduct
     */
    protected function request(CreateProduct $product)
    {
        $request = [
            'data' => [
                'id' => null,
                'type' => parent::REQUEST_TYPE,
                'attributes' => [
                    'code' => $product->getCode(),
                    'name' => $product->getName(),
                    'vat_rate' => $product->getVatRate(),
                    'unit' => $product->getUnit(),
                    'communications_tax_rate' => $product->getCommunicationsTaxRate(),
                    'archived' => $product->getArchived(),
                    'list_price' => $product->getListPrice(),
                    'buying_price' => $product->getBuyingPrice(),
                    'buying_currency' => $product->getBuyingCurrency(),
                    'inventory_tracking' => $product->getInventoryTracking(),
                    'initial_stock_count' => $product->getInitialStockCount()
                ],
                'relationships' => [
                    'category' => [
                        'data' => [
                            'id' => $product->getCategoryId(),
                            'type' => self::RELATIONSHIP_ITEM_CATEGORIES
                        ]
                    ]
                ]
            ]
        ];

        if (!empty($product->getSalesExciseDuty())) {
            $request['data']['attributes']['sales_excise_duty'] = $product->getSalesExciseDuty();
        }

        if (!empty($product->getSalesExciseDutyType())) {
            $request['data']['attributes']['sales_excise_duty_type'] = $product->getSalesExciseDutyType();
        }

        if (!empty($product->getPurchaseExciseDuty())) {
            $request['data']['attributes']['purchase_excise_duty'] = $product->getPurchaseExciseDuty();
        }

        if (!empty($product->getPurchaseExciseDutyType())) {
            $request['data']['attributes']['purchase_excise_duty_type'] = $product->getPurchaseExciseDutyType();
        }

        return $this->response(parent::create($request));
    }

    /**
     * @param $response
     * @return Response\CreateProduct
     */
    protected function response($response)
    {
        $product = new Response\CreateProduct();
        $data = $response->data;
        $product->setId($data->id);

        $attributes = $data->attributes;

        $product->setSalesExciseDutyCode($attributes->sales_excise_duty_code);
        $product->setSalesInvoiceDetailsCount($attributes->sales_invoice_details_count);
        $product->setPurchaseInvoiceDetailsCount($attributes->purchase_invoice_details_count);
        $product->setListPriceInTrl($attributes->list_price_in_trl);
        $product->setBuyingPriceInTrl($attributes->buying_price_in_trl);
        $product->setStockCount($attributes->stock_count);
        $product->setCreatedAt($attributes->created_at);
        $product->setUpdatedAt($attributes->updated_at);
        $product->setCode($attributes->code);
        $product->setName($attributes->name);
        $product->setVatRate($attributes->vat_rate);
        $product->setSalesExciseDuty($attributes->sales_excise_duty);
        $product->setSalesExciseDutyType($attributes->sales_excise_duty_type);
        $product->setPurchaseExciseDuty($attributes->purchase_excise_duty);
        $product->setPurchaseExciseDutyType($attributes->purchase_excise_duty_type);
        $product->setUnit($attributes->unit);
        $product->setCommunicationsTaxRate($attributes->communications_tax_rate);
        $product->setArchived($attributes->archived);
        $product->setListPrice($attributes->list_price);
        $product->setCurrency($attributes->currency);
        $product->setBuyingPrice($attributes->buying_price);
        $product->setBuyingCurrency($attributes->buying_currency);
        $product->setInventoryTracking($attributes->inventory_tracking);
        $product->setInitialStockCount($attributes->initial_stock_count);

        $relationships = $data->relationships;

        $category = $relationships->category;
        if (isset($relationships->category->data)) {
            $categoryData = $category->data;

            $newCategory = new RelationShipData();
            $newCategory->setId($categoryData->id);
            $newCategory->setType($categoryData->type);
            $product->setCategory($newCategory);
        }

        return $product;
    }

}