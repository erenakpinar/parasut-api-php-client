<?php

namespace Parasut\Entity\EInvoiceInboxes\Response;


class IndexEInvoiceInboxes
{
    protected $inboxList;

    /**
     * @return IndexEInvoiceInbox[]
     */
    public function getInboxList()
    {
        return $this->inboxList;
    }

    /**
     * @param IndexEInvoiceInbox $inbox
     */
    public function addInbox(IndexEInvoiceInbox $inbox)
    {
        $this->inboxList[] = $inbox;
    }
}