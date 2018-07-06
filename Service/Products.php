<?php

namespace Parasut\Service;

use Parasut\Api\Client;

class Products extends Client implements ServiceInterface
{
    const URL = 'products';
    const REQUEST_TYPE = 'products';

    public function index($url)
    {
        return parent::getRequest(self::URL . $url);
    }

    public function create($data)
    {
        return $this->postRequest(self::URL, $data);
    }

    public function show($id)
    {
        // Implement show() method.
    }

    public function edit($id, $data)
    {
        // Implement edit() method.
    }

    public function delete($id)
    {
        // Implement delete() method.
    }

}