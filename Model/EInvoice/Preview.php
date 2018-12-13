<?php

namespace Parasut\Model\EInvoice;

use Parasut\Entity\EInvoice\Request;
use Parasut\Entity\EInvoice\Response;
use Parasut\Service\PreviewEInvoice;

class Preview extends PreviewEInvoice
{
    const RELATIONSHIP_SALES_INVOICES = 'sales_invoices';

    /**
     * @param Request\PreviewEInvoice $invoice
     * @return Response\PreviewEInvoice
     */
    protected function request(Request\PreviewEInvoice $invoice)
    {
        $request = [
            'data' => [
                'id' => null,
                'type' => parent::REQUEST_TYPE,
                'attributes' => [
                    'vat_withholding_code' => $invoice->getVatWithholdingCode(),
                    'vat_exemption_reason_code' => $invoice->getVatExemptionReasonCode(),
                    'vat_exemption_reason' => $invoice->getVatExemptionReason(),
                    'note' => $invoice->getNote(),
                    'scenario' => $invoice->getScenario(),
                    'to' => $invoice->getTo()
                ],
                'relationships' => [
                    'invoice' => [
                        'data' => [
                            'id' => $invoice->getSalesInvoiceId(),
                            'type' => self::RELATIONSHIP_SALES_INVOICES
                        ]
                    ]
                ]
            ]
        ];

        return $this->response(parent::create($request));
    }

    /**
     * @param $response
     * @return Response\PreviewEInvoice
     */
    protected function response($response)
    {
        $invoice = new Response\PreviewEInvoice();

        $data = $response->data;
        $invoice->setId($data->id);
        $invoice->setType($data->type);

        $attributes = $data->attributes;

        $invoice->setStatus($attributes->status);

        if (isset($attributes->errors)) {
            foreach ($attributes->errors as $error) {
                $invoice->addError($error);
            }
        }

        return $invoice;
    }
}