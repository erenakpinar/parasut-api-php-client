<?php

namespace Parasut\Service;


use Parasut\Api\Client;

class Contacts extends Client implements ServiceInterface
{
    const URL = 'contacts';
    const REQUEST_TYPE = 'contacts';

    public function index($url)
    {
        return $this->getRequest(self::URL . $url);
    }

    public function create($data)
    {
        return $this->postRequest(self::URL, $data);
    }

    public function show($id)
    {
        //  Implement show() method.
    }

    public function edit($id, $data)
    {
        $url = self::URL . '/' . $id;

        return $this->putRequest($url, $data);
    }

    public function delete($id)
    {
        //  Implement delete() method.
    }

}