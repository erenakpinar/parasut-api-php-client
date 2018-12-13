<?php

namespace Parasut\Service;

use Parasut\Api\Client;

class PreviewEArchive extends Client implements ServiceInterface
{
    const URL = 'e_archives/preview';
    const REQUEST_TYPE = 'e_archives';

    public function index($url)
    {
        //Implement index() method.
    }

    public function create($data)
    {
        return $this->postRequest(self::URL, $data);
    }

    public function show($id)
    {
        //Implement show() method.
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