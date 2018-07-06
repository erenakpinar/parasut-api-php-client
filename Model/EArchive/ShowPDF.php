<?php

namespace Parasut\Model\EArchive;


use Parasut\Entity\EArchive\Request\ShowPDFEArchive;
use Parasut\Service\EArchive;
use Parasut\Entity\EArchive\Response;

class ShowPDF extends EArchive
{
    /**
     * @param ShowPDFEArchive $archive
     * @return Response\ShowPDFEArchive
     */
    protected function request(ShowPDFEArchive $archive)
    {
        $url = sprintf('%s/pdf', $archive->getId());

        return $this->response(parent::show($url));
    }

    /**
     * @param $response
     * @return Response\ShowPDFEArchive
     */
    protected function response($response)
    {
        $archive = new Response\ShowPDFEArchive();

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