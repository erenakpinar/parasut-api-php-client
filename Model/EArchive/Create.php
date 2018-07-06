<?php

namespace Parasut\Model\EArchive;


use Parasut\Entity\EArchive\Request\CreateEArchive;
use Parasut\Entity\EArchive\Response;
use Parasut\Service\EArchive;

class Create extends EArchive
{
    const RELATIONSHIP_SALES_INVOICES = 'sales_invoices';

    /**
     * @param CreateEArchive $invoice
     * @return Response\CreateEArchive
     */
    protected function request(CreateEArchive $invoice)
    {
        $request = [
            'data' => [
                'id' => null,
                'type' => parent::REQUEST_TYPE,
                'attributes' => [
                    'vat_withholding_code' => $invoice->getVatWithholdingCode(),
                    'vat_exemption_reason_code' => $invoice->getVatExemptionReasonCode(),
                    'vat_exemption_reason' => $invoice->getVatExemptionReason(),
                    'note' => $invoice->getNote()
                ],
                'relationships' => [
                    'sales_invoice' => [
                        'data' => [
                            'id' => $invoice->getSalesInvoiceId(),
                            'type' => self::RELATIONSHIP_SALES_INVOICES
                        ]
                    ]
                ]
            ]
        ];

        if (!empty($invoice->getInternetSale())) {
            $internetSale = $invoice->getInternetSale();
            $request['data']['attributes']['internet_sale'] = [
                'url' => $internetSale->getUrl(),
                'payment_type' => $internetSale->getPaymentType(),
                'payment_platform' => $internetSale->getPaymentPlatform(),
                'payment_date' => $internetSale->getPaymentDate()
            ];
        }

        return $this->response(parent::create($request));
    }


    /**
     * @param $response
     * @return Response\CreateEArchive
     */
    protected function response($response)
    {
        $invoice = new Response\CreateEArchive();

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