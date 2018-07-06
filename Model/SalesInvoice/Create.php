<?php

namespace Parasut\Model\SalesInvoice;

use Parasut\Entity\RelationShipData;
use Parasut\Entity\SalesInvoice\Request\CreateSalesInvoice;
use Parasut\Service\SalesInvoices;
use Parasut\Entity\SalesInvoice\Response;

class Create extends SalesInvoices
{
    const RELATIONSHIPS_SALES_INVOICES_DETAILS = 'sales_invoice_details';
    const RELATIONSHIPS_PRODUCTS = 'products';
    const RELATIONSHIPS_CONTACTS = 'contacts';
    const RELATIONSHIPS_ITEM_CATEGORIES= 'item_categories';
    const RELATIONSHIPS_TAGS = 'tags';

    /**
     * @param CreateSalesInvoice $salesInvoice
     * @return Response\CreateSalesInvoice
     */
    protected function request(CreateSalesInvoice $salesInvoice)
    {
        $request = [
            'data' => [
                'id' => null,
                'type' => parent::REQUEST_TYPE,
                'attributes' => [
                    'item_type' => $salesInvoice->getItemType(),
                    'description' => $salesInvoice->getDescription(),
                    'issue_date' => $salesInvoice->getIssueDate(),
                    'due_date' => $salesInvoice->getDueDate(),
                    'invoice_series' => $salesInvoice->getInvoiceSeries(),
                    'invoice_id' => $salesInvoice->getInvoiceId(),
                    'currency' => $salesInvoice->getCurrency(),
                    'exchange_rate' => $salesInvoice->getExchangeRate(),
                    'withholding_rate' => $salesInvoice->getWithholdingRate(),
                    'vat_withholding_rate' => $salesInvoice->getVatWithholdingRate(),
                    'invoice_discount_type' => $salesInvoice->getInvoiceDiscountType(),
                    'invoice_discount' => $salesInvoice->getInvoiceDiscount(),
                    'billing_address' => $salesInvoice->getBillingAddress(),
                    'billing_phone' => $salesInvoice->getBillingPhone(),
                    'billing_fax' => $salesInvoice->getBillingFax(),
                    'tax_office' => $salesInvoice->getTaxOffice(),
                    'tax_number' => $salesInvoice->getTaxNumber(),
                    'city' => $salesInvoice->getCity(),
                    'district' => $salesInvoice->getDistrict(),
                    'is_abroad' => $salesInvoice->getisAbroad(),
                    'order_no' => $salesInvoice->getOrderNo(),
                    'order_date' => $salesInvoice->getOrderDate(),
                    'shipment_addres' => $salesInvoice->getShipmentAddres()
                ]
            ]
        ];

        foreach ($salesInvoice->getDetails() as $detail) {
            $request['data']['relationships']['details']['data'][] = [
                'id' => null,
                'type' => self::RELATIONSHIPS_SALES_INVOICES_DETAILS,
                'attributes' => [
                    'quantity' => $detail->getQuantity(),
                    'unit_price' => $detail->getUnitPrice(),
                    'vat_rate' => $detail->getVatRate(),
                    'discount_type' => $detail->getDiscountType(),
                    'discount_value' => $detail->getDiscountValue(),
                    'excise_duty_type' => $detail->getExciseDutyType(),
                    'excise_duty_value' => $detail->getExciseDutyValue(),
                    'communications_tax_rate' => $detail->getCommunicationsTaxRate(),
                    'description' => $detail->getDescription()
                ],
                'relationships' => [
                    'product' => [
                        'data' => [
                            'id' => $detail->getProductId(),
                            'type' => self::RELATIONSHIPS_PRODUCTS
                        ]
                    ]
                ]
            ];
        }

        if (!empty($salesInvoice->getContactId())) {
            $request['data']['relationships']['contact']['data'] = [
                'id' => $salesInvoice->getContactId(),
                'type' => self::RELATIONSHIPS_CONTACTS
            ];
        }

        if (!empty($salesInvoice->getCategoryId())) {
            $request['data']['relationships']['category']['data'] = [
                'id' => $salesInvoice->getCategoryId(),
                'type' => self::RELATIONSHIPS_ITEM_CATEGORIES
            ];
        }

        foreach ($salesInvoice->getTags() as $tag) {
            $request['data']['relationships']['tags']['data'][] = [
                'id' => $tag,
                'type' => self::RELATIONSHIPS_TAGS
            ];
        }

        return $this->response(parent::create($request));
    }

    /**
     * @param $response
     * @return Response\CreateSalesInvoice
     */
    protected function response($response)
    {
        $data = $response->data;
        $salesInvoice = new Response\CreateSalesInvoice();
        $salesInvoice->setId($data->id);

        $attributes = $data->attributes;

        $salesInvoice->setArchived($attributes->archived);
        $salesInvoice->setInvoiceNo($attributes->invoice_no);
        $salesInvoice->setNetTotal($attributes->net_total);
        $salesInvoice->setGrossTotal($attributes->gross_total);
        $salesInvoice->setWithholding($attributes->withholding);
        $salesInvoice->setTotalExciseDuty($attributes->total_excise_duty);
        $salesInvoice->setTotalCommunicationsTax($attributes->total_communications_tax);
        $salesInvoice->setTotalVat($attributes->total_vat);
        $salesInvoice->setVatWithholding($attributes->vat_withholding);
        $salesInvoice->setTotalDiscount($attributes->total_discount);
        $salesInvoice->setTotalInvoiceDiscount($attributes->total_invoice_discount);
        $salesInvoice->setBeforeTaxesTotal($attributes->before_taxes_total);
        $salesInvoice->setRemaining($attributes->remaining);
        $salesInvoice->setRemainingInTrl($attributes->remaining_in_trl);
        $salesInvoice->setPaymentStatus($attributes->payment_status);
        $salesInvoice->setCreatedAt($attributes->created_at);
        $salesInvoice->setUpdatedAt($attributes->updated_at);
        $salesInvoice->setItemType($attributes->item_type);
        $salesInvoice->setDescription($attributes->description);
        $salesInvoice->setIssueDate($attributes->issue_date);
        $salesInvoice->setDueDate($attributes->due_date);
        $salesInvoice->setInvoiceSeries($attributes->invoice_series);
        $salesInvoice->setInvoiceId($attributes->invoice_id);
        $salesInvoice->setCurrency($attributes->currency);
        $salesInvoice->setExchangeRate($attributes->exchange_rate);
        $salesInvoice->setWithholdingRate($attributes->withholding_rate);
        $salesInvoice->setVatWithholdingRate($attributes->vat_withholding_rate);
        $salesInvoice->setInvoiceDiscountType($attributes->invoice_discount_type);
        $salesInvoice->setInvoiceDiscount($attributes->invoice_discount);
        $salesInvoice->setBillingAddress($attributes->billing_address);
        $salesInvoice->setBillingPhone($attributes->billing_phone);
        $salesInvoice->setBillingFax($attributes->billing_fax);
        $salesInvoice->setTaxOffice($attributes->tax_office);
        $salesInvoice->setTaxNumber($attributes->tax_number);
        $salesInvoice->setCity($attributes->city);
        $salesInvoice->setDistrict($attributes->district);
        $salesInvoice->setOrderNo($attributes->order_no);
        $salesInvoice->setOrderDate($attributes->order_date);

        if (isset($attributes->shipment_addres)) {
            $salesInvoice->setShipmentAddres($attributes->shipment_addres);
        }
        if (isset($attributes->is_abroad)) {
            $salesInvoice->setIsAbroad($attributes->is_abroad);
        }

        $relationships = $data->relationships;

        if (isset($relationships->category->data)) {
            $category = $relationships->category->data;
            $newCategory = new RelationShipData();
            $newCategory->setId($category->id);
            $newCategory->setType($category->type);
            $salesInvoice->setCategory($newCategory);
        }

        if (isset($relationships->contact->data)) {
            $contact = $relationships->contact->data;
            $newContact = new RelationShipData();
            $newContact->setId($contact->id);
            $newContact->setType($contact->type);
            $salesInvoice->setContact($newContact);
        }

        if (isset($relationships->details->data)) {
            $details = $relationships->details->data;
            foreach ($details as $detail) {
                $newDetail = new RelationShipData();
                $newDetail->setId($detail->id);
                $newDetail->setType($detail->type);
                $salesInvoice->addDetail($newDetail);
            }
        }

        if (isset($relationships->payments->data)) {
            $payments = $relationships->payments->data;
            foreach ($payments as $payment) {
                $newPayment = new RelationShipData();
                $newPayment->setId($payment->id);
                $newPayment->setType($payment->type);
                $salesInvoice->addPayment($newPayment);
            }
        }

        if (isset($relationships->tags->data)) {
            $tags = $relationships->tags->data;
            foreach ($tags as $tag) {
                $newTag = new RelationShipData();
                $newTag->setId($tag->id);
                $newTag->setType($tag->type);
                $salesInvoice->addTag($newTag);
            }
        }

        if (isset($relationships->sharings->data)) {
            $sharings = $relationships->sharings->data;
            foreach ($sharings as $sharing) {
                $newSharing = new RelationShipData();
                $newSharing->setId($sharing->id);
                $newSharing->setType($sharing->type);
                $salesInvoice->addSharing($newSharing);
            }
        }

        if (isset($relationships->recurrence_plan->data)) {
            $recurrencePlan = $relationships->recurrence_plan->data;
            $newRecurrencePlan = new RelationShipData();
            $newRecurrencePlan->setId($recurrencePlan->id);
            $newRecurrencePlan->setType($recurrencePlan->type);
            $salesInvoice->setRecurrencePlan($newRecurrencePlan);
        }

        if (isset($relationships->active_e_document->data)) {
            $activeEDocument = $relationships->active_e_document->data;
            $newActiveEDocument = new RelationShipData();
            $newActiveEDocument->setId($activeEDocument->id);
            $newActiveEDocument->setType($activeEDocument->type);
            $salesInvoice->setRecurrencePlan($newActiveEDocument);
        }

        return $salesInvoice;
    }
}