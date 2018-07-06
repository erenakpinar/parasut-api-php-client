<?php

namespace Parasut\Model\EInvoice;


use Parasut\Entity\EInvoice\Request\ShowPDFEInvoice;
use Parasut\Entity\EInvoice\Response;
use Parasut\Service\EInvoice;

class ShowPDF extends EInvoice
{
    /**
     * @param ShowPDFEInvoice $archive
     * @return Response\ShowPDFEInvoice
     */
    protected function request(ShowPDFEInvoice $archive)
    {
        $url = sprintf('%s/pdf', $archive->getId());

        return $this->response(parent::show($url));
    }

    /**
     * @param $response
     * @return Response\ShowPDFEInvoice
     */
    protected function response($response)
    {
        $archive = new Response\ShowPDFEInvoice();

        $data = $response->data;
        $archive->setId($data->id);
        $archive->setType($data->type);

        if (isset($data->attributes)) {
            $attributes = $data->attributes;
            $archive->setUrl($attributes->url);
            $archive->setExpiresAt($attributes->expires_at);
        }
        return $archive;
    }
}