<?php

namespace Parasut\Service;


use Parasut\Api\Client;

class TrackableJob extends Client implements ServiceInterface
{
    const URL = 'trackable_jobs';

    public function index($url)
    {
        //Implement index() method.
    }

    public function create($data)
    {
        //Implement create() method.
    }

    public function show($id)
    {
        return $this->getRequest(sprintf('%s/%s', self::URL, $id));
    }

    public function edit($id, $data)
    {
        //Implement edit() method.
    }

    public function delete($id)
    {
        //Implement delete() method.
    }

}