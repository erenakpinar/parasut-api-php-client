<?php

namespace Parasut\Service;

use Parasut\Api\Client;

class SalesInvoices extends Client implements ServiceInterface
{
    const URL = 'sales_invoices';
    const REQUEST_TYPE = 'sales_invoices';

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