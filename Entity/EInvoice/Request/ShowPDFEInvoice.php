<?php

namespace Parasut\Entity\EInvoice\Request;


use Parasut\Model\EInvoice\ShowPDF;
use Parasut\Entity\EInvoice\Response;

class ShowPDFEInvoice extends ShowPDF
{
    protected $id;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return Response\ShowPDFEInvoice
     */
    public function send()
    {
        return parent::request($this);
    }
}