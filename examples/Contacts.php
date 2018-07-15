<?php

namespace Parasut\Examples;

use Parasut\Entity\Contact\Request;
use Parasut\Entity\Contact\Response;

class Contacts
{
    /**
     * @return Response\IndexContacts
     */
    public function filter()
    {
        $contacts = new Request\IndexContact();
        $contacts->setTaxNumber('0000000000');

        return $contacts->send();
    }

    /**
     * @return Response\CreateContact
     */
    public function newContact()
    {
        $customer = new Request\CreateContact();
        $customer->setEmail('info@erenakpinar.com');
        $customer->setName('Cactus Software Corporation');
        $customer->setShortName('Cactus Software');
        $customer->setContactType(Request\CreateContact::CONTACT_TYPE_COMPANY);
        $customer->setTaxOffice('Beyoglu');
        $customer->setTaxNumber('0000000000');
        $customer->setAddress('Dummy Address Lorem Ipsum Sit Amet Dummy Pin Dummy place');
        $customer->setPhone('05555555555');
        $customer->setAccountType(Request\CreateContact::ACCOUNT_TYPE_CUSTOMER);
        $customer->setDistrict('Beyolgu');
        $customer->setCity('Istanbul');

        $newCustomerPeople = new Request\CreateContactPeople();
        $newCustomerPeople->setName('Eren Akpinar');
        $newCustomerPeople->setEmail('ea@erenakpinar.com');
        $newCustomerPeople->setNotes('Accountant');
        $newCustomerPeople->setPhone('05555555555');
        $customer->addContactPeople($newCustomerPeople);

        return $customer->send();
    }

    /**
     * @param Response\IndexContact $contact
     * @return Response\EditContact
     */
    public function editContact(Response\IndexContact $contact)
    {
        $editContact = new Request\EditContact();
        $editContact->setId($contact->getId());
        $editContact->setEmail($contact->getEmail());
        $editContact->setName($contact->getName());
        $editContact->setShortName($contact->getShortName());
        $editContact->setContactType($contact->getContactType());
        $editContact->setTaxOffice($contact->getTaxOffice());
        $editContact->setTaxNumber($contact->getTaxNumber());
        $editContact->setDistrict($contact->getDistrict());
        $editContact->setCity($contact->getCity());
        $editContact->setAddress($contact->getAddress());
        $editContact->setPhone($contact->getPhone());
        $editContact->setFax($contact->getFax());
        $editContact->setIsAbroad($contact->getIsAbroad());
        $editContact->setArchived($contact->getArchived());
        $editContact->setIban($contact->getIban());
        $editContact->setAccountType($contact->getAccountType());

        $editContact->setEmail('invoice@erenakpinar.com');
        $editContact->setName('Cactus Software Corporation');
        $editContact->setShortName('Cactus Software');
        $editContact->setTaxOffice('Beyoglu');
        //$editContact->setTaxNumber('0000000000');
        $editContact->setAddress('Dummy Address Lorem Ipsum Sit Amet Dummy Pin Dummy place');
        $editContact->setPhone('05555555555');
        $editContact->setDistrict('Beyolgu');
        $editContact->setCity('Istanbul');

        return $editContact->send();
    }
}