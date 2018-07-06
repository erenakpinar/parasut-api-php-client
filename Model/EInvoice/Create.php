<?php

namespace Parasut\Model\EInvoice;


use Parasut\Entity\EInvoice\Request\CreateEInvoice;
use Parasut\Service\EInvoice;
use Parasut\Entity\EInvoice\Response;

class Create extends EInvoice
{
    const RELATIONSHIP_SALES_INVOICES = 'sales_invoices';

    /**
     * @param CreateEInvoice $invoice
     * @return Response\CreateEInvoice
     */
    protected function request(CreateEInvoice $invoice)
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
     * @return Response\CreateEInvoice
     */
    protected function response($response)
    {
        $invoice = new Response\CreateEInvoice();

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