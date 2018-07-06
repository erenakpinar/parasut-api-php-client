<?php

namespace Parasut\Model\SalesInvoice;


use Parasut\Entity\RelationShipData;
use Parasut\Entity\SalesInvoice\Request\ShowSalesInvoice;
use Parasut\Helper;
use Parasut\Service\SalesInvoices;
use Parasut\Entity\SalesInvoice\Response;

class Show extends SalesInvoices
{
    /**
     * @param ShowSalesInvoice $invoice
     * @return Response\ShowSalesInvoice
     */
    protected function request(ShowSalesInvoice $invoice)
    {
        $url = $invoice->getId() . Helper::generateQueryString([], '', $invoice->getInclude());

        return $this->response(parent::show($url));
    }

    /**
     * @param $response
     * @return Response\ShowSalesInvoice
     */
    protected function response($response)
    {
        $invoice = new Response\ShowSalesInvoice();

        $data = $response->data;
        $invoice->setId($data->id);

        $attributes = $data->attributes;

        $invoice->setArchived($attributes->archived);
        $invoice->setInvoiceNo($attributes->invoice_no);
        $invoice->setNetTotal($attributes->net_total);
        $invoice->setGrossTotal($attributes->gross_total);
        $invoice->setWithholding($attributes->withholding);
        $invoice->setTotalExciseDuty($attributes->total_excise_duty);
        $invoice->setTotalCommunicationsTax($attributes->total_communications_tax);
        $invoice->setTotalVat($attributes->total_vat);
        $invoice->setVatWithholding($attributes->vat_withholding);
        $invoice->setTotalDiscount($attributes->total_discount);
        $invoice->setTotalInvoiceDiscount($attributes->total_invoice_discount);
        $invoice->setBeforeTaxesTotal($attributes->before_taxes_total);
        $invoice->setRemaining($attributes->remaining);
        $invoice->setRemainingInTrl($attributes->remaining_in_trl);
        $invoice->setPaymentStatus($attributes->payment_status);
        $invoice->setCreatedAt($attributes->created_at);
        $invoice->setUpdatedAt($attributes->updated_at);
        $invoice->setItemType($attributes->item_type);
        $invoice->setDescription($attributes->description);
        $invoice->setIssueDate($attributes->issue_date);
        $invoice->setDueDate($attributes->due_date);
        $invoice->setInvoiceSeries($attributes->invoice_series);
        $invoice->setInvoiceId($attributes->invoice_id);
        $invoice->setCurrency($attributes->currency);
        $invoice->setExchangeRate($attributes->exchange_rate);
        $invoice->setWithholdingRate($attributes->withholding_rate);
        $invoice->setVatWithholdingRate($attributes->vat_withholding_rate);
        $invoice->setInvoiceDiscountType($attributes->invoice_discount_type);
        $invoice->setInvoiceDiscount($attributes->invoice_discount);
        $invoice->setBillingAddress($attributes->billing_address);
        $invoice->setBillingPhone($attributes->billing_phone);
        $invoice->setBillingFax($attributes->billing_fax);
        $invoice->setTaxOffice($attributes->tax_office);
        $invoice->setTaxNumber($attributes->tax_number);
        $invoice->setCity($attributes->city);
        $invoice->setDistrict($attributes->district);
        if (isset($attributes->is_abroad)) {
            $invoice->setIsAbroad($attributes->is_abroad);
        }
        $invoice->setOrderNo($attributes->order_no);
        $invoice->setOrderDate($attributes->order_date);
        $invoice->setShipmentAddres($attributes->shipment_address);

        $relationships = $data->relationships;

        if (isset($relationships->category->data)) {
            $category = $relationships->category->data;
            $newCategory = new RelationShipData();
            $newCategory->setId($category->id);
            $newCategory->setType($category->type);
            $invoice->setCategory($newCategory);
        }

        if (isset($relationships->contact->data)) {
            $contact = $relationships->contact->data;
            $newContact = new RelationShipData();
            $newContact->setId($contact->id);
            $newContact->setType($contact->type);
            $invoice->setContact($newContact);
        }

        if (isset($relationships->details->data)) {
            $details = $relationships->details->data;
            foreach ($details as $detail) {
                $newDetail = new RelationShipData();
                $newDetail->setId($detail->id);
                $newDetail->setType($detail->type);
                $invoice->addDetail($newDetail);
            }
        }

        if (isset($relationships->payments->data)) {
            $payments = $relationships->payments->data;
            foreach ($payments as $payment) {
                $newPayment = new RelationShipData();
                $newPayment->setId($payment->id);
                $newPayment->setType($payment->type);
                $invoice->addPayment($newPayment);
            }
        }

        if (isset($relationships->tags->data)) {
            $tags = $relationships->tags->data;
            foreach ($tags as $tag) {
                $newTag = new RelationShipData();
                $newTag->setId($tag->id);
                $newTag->setType($tag->type);
                $invoice->addTag($newTag);
            }
        }

        if (isset($relationships->sharings->data)) {
            $sharings = $relationships->sharings->data;
            foreach ($sharings as $sharing) {
                $newSharing = new RelationShipData();
                $newSharing->setId($sharing->id);
                $newSharing->setType($sharing->type);
                $invoice->addSharing($newSharing);
            }
        }

        if (isset($relationships->recurrence_plan->data)) {
            $recurrencePlan = $relationships->recurrence_plan->data;
            $newRecurrencePlan = new RelationShipData();
            $newRecurrencePlan->setId($recurrencePlan->id);
            $newRecurrencePlan->setType($recurrencePlan->type);
            $invoice->setRecurrencePlan($newRecurrencePlan);
        }

        if (isset($relationships->active_e_document->data)) {
            $activeEDocument = $relationships->active_e_document->data;
            $newActiveEDocument = new RelationShipData();
            $newActiveEDocument->setId($activeEDocument->id);
            $newActiveEDocument->setType($activeEDocument->type);
            $invoice->setActiveEDocument($newActiveEDocument);
        }

        return $invoice;
    }
}