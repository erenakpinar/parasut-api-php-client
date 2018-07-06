<?php

namespace Parasut\Entity\TrackableJob\Request;


use Parasut\Model\TrackableJob\Show;
use Parasut\Entity\TrackableJob\Response;

class ShowTrackableJob extends Show
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
     * @return Response\ShowTrackableJob
     */
    public function send()
    {
        return parent::request($this);
    }
}