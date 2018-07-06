<?php

namespace Parasut\Service;


use Parasut\Api\Client;

class EInvoice extends Client implements ServiceInterface
{
    const URL = 'e_invoices';
    const REQUEST_TYPE = 'e_invoices';

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