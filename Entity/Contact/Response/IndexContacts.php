<?php

namespace Parasut\Entity\Contact\Response;

use Parasut\Entity\Response\Data;
use Parasut\Entity\Response\Meta;

class IndexContacts
{
    protected $contactList;
    protected $included;
    protected $meta;

    /**
     * @return IndexContact[]
     */
    public function getContactList()
    {
        return $this->contactList;
    }

    /**
     * @param IndexContact $contact
     */
    public function addContact(IndexContact $contact)
    {
        $this->contactList[] = $contact;
    }

    /**
     * @return mixed
     */
    public function getIncluded()
    {
        return $this->included;
    }

    /**
     * @param Data $include
     */
    public function addInclude(Data $include)
    {
        $this->included[] = $include;
    }

    /**
     * @return Meta
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @param Meta $meta
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;
    }
}