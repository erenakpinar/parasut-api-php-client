<?php

namespace Parasut\Service;


use Parasut\Api\Client;

class EInvoiceInboxes extends Client implements ServiceInterface
{
    const URL = 'e_invoice_inboxes';
    const REQUEST_TYPE = 'e_invoice_inboxes';

    public function index($url)
    {
        return parent::getRequest(self::URL . $url);
    }

    public function create($data)
    {
        //Implement create() method.
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