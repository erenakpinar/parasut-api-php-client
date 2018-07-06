<?php

namespace Parasut\Entity\EInvoiceInboxes\Request;


use Parasut\Model\EInvoiceInboxes\Index;
use Parasut\Entity\EInvoiceInboxes\Response;

class IndexEInvoiceInboxes extends Index
{
    const FILTER_VKN = 'vkn';

    protected $vkn;

    /**
     * @return mixed
     */
    public function getVkn()
    {
        return $this->vkn;
    }

    /**
     * @param mixed $vkn
     */
    public function setVkn($vkn)
    {
        $this->vkn = $vkn;
    }

    /**
     * @return Response\IndexEInvoiceInboxes
     */
    public function send()
    {
        return parent::request($this);
    }
}