<?php

namespace Parasut\Entity\EArchive\Request;


use Parasut\Model\EArchive\ShowPDF;
use Parasut\Entity\EArchive\Response;

class ShowPDFEArchive extends ShowPDF
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
     * @return Response\ShowPDFEArchive
     */
    public function send()
    {
        return parent::request($this);
    }
}