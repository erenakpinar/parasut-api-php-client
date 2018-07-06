<?php

namespace Parasut\Model\Contact;


use Parasut\Entity\Contact\Request;
use Parasut\Entity\Contact\Response\IndexContact;
use Parasut\Entity\Contact\Response\IndexContacts;
use Parasut\Entity\RelationShipData;
use Parasut\Helper;
use Parasut\Service\Contacts;

class Index extends Contacts
{
    /**
     * @param Request\IndexContact $index
     * @return IndexContacts
     */
    protected function request(Request\IndexContact $index)
    {
        $filters = [];
        if (!empty($index->getName())) {
            $filters[Request\IndexContact::FILTER_NAME] = $index->getName();
        }

        if (!empty($index->getEmail())) {
            $filters[Request\IndexContact::FILTER_EMAIL] = $index->getEmail();
        }

        if (!empty($index->getTaxNumber())) {
            $filters[Request\IndexContact::FILTER_TAX_NUMBER] = $index->getTaxNumber();
        }

        if (!empty($index->getTaxOffice())) {
            $filters[Request\IndexContact::FILTER_TAX_OFFICE] = $index->getTaxOffice();
        }

        if (!empty($index->getCity())) {
            $filters[Request\IndexContact::FILTER_CITY] = $index->getCity();
        }

        $url = Helper::generateQueryString($filters, $index->getSort(), $index->getInclude());

        return $this->response(parent::index($url));
    }


    /**
     * @param $response
     * @return IndexContacts
     */
    protected function response($response)
    {
        $contactList = new IndexContacts();
        $dataList = $response->data;

        foreach ($dataList as $data) {
            $contact = new IndexContact();
            $contact->setId($data->id);

            $attributes = $data->attributes;
            $contact->setBalance($attributes->balance);
            $contact->setTrlBalance($attributes->trl_balance);
            $contact->setUsdBalance($attributes->usd_balance);
            $contact->setEurBalance($attributes->eur_balance);
            $contact->setGbpBalance($attributes->gbp_balance);
            $contact->setCreatedAt($attributes->created_at);
            $contact->setUpdatedAt($attributes->updated_at);
            $contact->setEmail($attributes->email);
            $contact->setName($attributes->name);
            $contact->setShortName($attributes->short_name);
            $contact->setContactType($attributes->contact_type);
            $contact->setTaxOffice($attributes->tax_office);
            $contact->setTaxNumber($attributes->tax_number);
            $contact->setDistrict($attributes->district);
            $contact->setCity($attributes->city);
            $contact->setAddress($attributes->address);
            $contact->setPhone($attributes->phone);
            $contact->setFax($attributes->fax);
            $contact->setIsAbroad($attributes->is_abroad);
            $contact->setArchived($attributes->archived);
            $contact->setIban($attributes->iban);
            $contact->setAccountType($attributes->account_type);

            $relationships = $data->relationships;

            if (isset($relationships->category->data)) {
                $relationshipsCategory = $relationships->category->data;
                $category = new RelationShipData();
                $category->setId($relationshipsCategory->id);
                $category->setType($relationshipsCategory->type);
                $contact->setCategory($category);
            }

            if (isset($relationships->contact_portal->data)) {
                $relationshipsContactPortal = $relationships->contact_portal->data;
                $contactPortal = new RelationShipData();
                $contactPortal->setId($relationshipsContactPortal->id);
                $contactPortal->setType($relationshipsContactPortal->type);
                $contact->setContactPortal($contactPortal);
            }

            if (isset($relationships->contact_people->data)) {
                $relationshipsContactPeople = $relationships->contact_people->data;
                $contactPeople = new RelationShipData();
                $contactPeople->setId($relationshipsContactPeople->id);
                $contactPeople->setType($relationshipsContactPeople->type);
                $contact->setContactPeople($contactPeople);
            }

            $contactList->addContact($contact);
        }

        return $contactList;
    }
}