<?php

namespace Parasut\Model\Product;

use Parasut\Entity\Response\Data;
use Parasut\Entity\Response\Meta;
use Parasut\Entity\Product\Request;
use Parasut\Entity\RelationShipData;
use Parasut\Helper;
use Parasut\Service\Products;
use Parasut\Entity\Product\Response;

class Index extends Products
{
    /**
     * @param Request\IndexProduct $index
     * @return Response\IndexProducts
     */
    protected function request(Request\IndexProduct $index)
    {
        $filters = [];
        if (!empty($index->getName())) {
            $filters[Request\IndexProduct::FILTER_NAME] = $index->getName();
        }

        if (!empty($index->getCode())) {
            $filters[Request\IndexProduct::FILTER_CODE] = $index->getCode();
        }

        $url = Helper::generateQueryString($filters, $index->getSort(), $index->getInclude());

        return $this->response(parent::index($url));
    }

    /**
     * @param $response
     * @return Response\IndexProducts
     */
    protected function response($response)
    {
        $dataList = $response->data;
        $products = new Response\IndexProducts();

        foreach ($dataList as $data) {
            $entity = new Response\IndexProduct();
            $entity->setId($data->id);
            $attributes = $data->attributes;
            $entity->setSalesExciseDutyCode($attributes->sales_excise_duty_code);
            $entity->setSalesInvoiceDetailsCount($attributes->sales_invoice_details_count);
            $entity->setPurchaseInvoiceDetailsCount($attributes->purchase_invoice_details_count);
            $entity->setListPriceInTrl($attributes->list_price_in_trl);
            $entity->setBuyingPriceInTrl($attributes->buying_price_in_trl);
            $entity->setStockCount($attributes->stock_count);
            $entity->setCreatedAt($attributes->created_at);
            $entity->setUpdatedAt($attributes->updated_at);
            $entity->setCode($attributes->code);
            $entity->setName($attributes->name);
            $entity->setVatRate($attributes->vat_rate);
            $entity->setSalesExciseDuty($attributes->sales_excise_duty);
            $entity->setSalesExciseDutyType($attributes->sales_excise_duty_type);
            $entity->setPurchaseExciseDuty($attributes->purchase_excise_duty);
            $entity->setPurchaseExciseDutyType($attributes->purchase_excise_duty_type);
            $entity->setUnit($attributes->unit);
            $entity->setCommunicationsTaxRate($attributes->communications_tax_rate);
            $entity->setArchived($attributes->archived);
            $entity->setListPrice($attributes->list_price);
            $entity->setCurrency($attributes->currency);
            $entity->setBuyingPrice($attributes->buying_price);
            $entity->setBuyingCurrency($attributes->buying_currency);
            $entity->setInventoryTracking($attributes->inventory_tracking);
            $entity->setInitialStockCount($attributes->initial_stock_count);

            $relationships = $data->relationships;
            $category = $relationships->category;
            if (isset($relationships->category->data)) {
                $categoryData = $category->data;

                $newCategory = new RelationShipData();
                $newCategory->setId($categoryData->id);
                $newCategory->setType($categoryData->type);
                $entity->setCategory($newCategory);
            }

            $products->addProduct($entity);
        }

        if (isset($response->included)) {
            $includedList = $response->included;
            foreach ($includedList as $include) {
                $newInclude = new Data();
                $newInclude->setId($include->id);
                $newInclude->setType($include->type);
                $newInclude->setAttributes($include->attributes);
                $newInclude->setRelationships($include->relationships);
                $products->addIncluded($newInclude);
            }
        }

        if (isset($response->meta)) {
            $meta = $response->meta;
            $newMeta = new Meta();
            $newMeta->setCurrentPage($meta->current_page);
            $newMeta->setTotalPages($meta->total_pages);
            $newMeta->setTotalCount($meta->total_count);
            $products->setMeta($newMeta);
        }

        return $products;
    }
}