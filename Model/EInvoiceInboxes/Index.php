<?php

namespace Parasut\Model\EInvoiceInboxes;


use Parasut\Entity\EInvoiceInboxes\Request\IndexEInvoiceInboxes;
use Parasut\Helper;
use Parasut\Service\EInvoiceInboxes;
use Parasut\Entity\EInvoiceInboxes\Response;

class Index extends EInvoiceInboxes
{
    /**
     * @param IndexEInvoiceInboxes $invoiceInboxes
     * @return Response\IndexEInvoiceInboxes
     */
    public function request(IndexEInvoiceInboxes $invoiceInboxes)
    {
        $filters = [];
        if (!empty($invoiceInboxes->getVkn())) {
            $filters[IndexEInvoiceInboxes::FILTER_VKN] = $invoiceInboxes->getVkn();
        }

        $url = Helper::generateQueryString($filters);

        return $this->response(parent::index($url));
    }

    /**
     * @param $response
     * @return Response\IndexEInvoiceInboxes
     */
    public function response($response)
    {
        $inboxes = new Response\IndexEInvoiceInboxes();

        foreach ($response->data as $data) {
            $inbox = new Response\IndexEInvoiceInbox();
            $inbox->setId($data->id);

            $attributes = $data->attributes;
            $inbox->setVkn($attributes->vkn);
            $inbox->setEInvoiceAddress($attributes->e_invoice_address);
            $inbox->setName($attributes->name);
            $inbox->setInboxType($attributes->inbox_type);
            $inbox->setAddressRegisteredAt($attributes->address_registered_at);
            $inbox->setRegisteredAt($attributes->registered_at);
            $inbox->setCreatedAt($attributes->created_at);
            $inbox->setUpdatedAt($attributes->updated_at);

            $inboxes->addInbox($inbox);
        }

        return $inboxes;
    }
}