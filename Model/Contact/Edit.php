<?php

namespace Parasut\Model\Contact;


use Parasut\Entity\Contact\Request\EditContact;
use Parasut\Service\Contacts;
use Parasut\Entity\Contact\Response;

class Edit extends Contacts
{
    const RELATIONSHIP_ITEM_CATEGORIES = 'item_categories';
    const RELATIONSHIP_CONTACT_PEOPLE = 'contact_people';

    /**
     * @param EditContact $contact
     * @return Response\EditContact
     */
    protected function request(EditContact $contact)
    {
        $request = [
            'data' => [
                'id' => $contact->getId(),
                'type' => parent::REQUEST_TYPE,
                'attributes' => [
                    'email' => $contact->getEmail(),
                    'name' => $contact->getName(),
                    'short_name' => $contact->getShortName(),
                    'contact_type' => $contact->getContactType(),
                    'tax_office' => $contact->getTaxOffice(),
                    'tax_number' => $contact->getTaxNumber(),
                    'district' => $contact->getDistrict(),
                    'city' => $contact->getCity(),
                    'address' => $contact->getAddress(),
                    'phone' => $contact->getPhone(),
                    'fax' => $contact->getFax(),
                    'is_abroad' => $contact->getisAbroad(),
                    'archived' => $contact->getArchived(),
                    'iban' => $contact->getIban(),
                    'account_type' => $contact->getAccountType()
                ],
                'relationships' => [
                ]
            ]
        ];

        return $this->response(parent::edit($contact->getId(), $request));
    }

    /**
     * @param $response
     * @return Response\EditContact
     */
    protected function response($response)
    {
        $data = $response->data;
        $contact = new Response\EditContact();
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

        return $contact;
    }
}