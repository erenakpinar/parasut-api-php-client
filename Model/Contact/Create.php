<?php

namespace Parasut\Model\Contact;


use Parasut\Entity\Contact\Request\CreateContact;
use Parasut\Entity\RelationShipData;
use Parasut\Service\Contacts;
use Parasut\Entity\Contact\Response;

class Create extends Contacts
{
    const RELATIONSHIP_ITEM_CATEGORIES = 'item_categories';
    const RELATIONSHIP_CONTACT_PEOPLE = 'contact_people';

    /**
     * @param CreateContact $contact
     * @return Response\CreateContact
     */
    protected function request(CreateContact $contact)
    {
        $request = [
            'data' => [
                'id' => null,
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
                    'category' => [
                        'data' => [
                            'id' => $contact->getCategoryId(),
                            'type' => self::RELATIONSHIP_ITEM_CATEGORIES
                        ]
                    ]
                ]
            ]
        ];

        foreach ($contact->getContactPeoples() as $contactPeople) {
            $request['data']['relationships']['contact_people']['data'][] = [
                'id' => null,
                'type' => self::RELATIONSHIP_CONTACT_PEOPLE,
                'attributes' => [
                    'name' => $contactPeople->getName(),
                    'email' => $contactPeople->getEmail(),
                    'phone' => $contactPeople->getPhone(),
                    'notes' => $contactPeople->getNotes()
                ]
            ];
        }

        return $this->response(parent::create($request));
    }

    /**
     * @param $response
     * @return Response\CreateContact
     */
    protected function response($response)
    {
        $data = $response->data;
        $contact = new Response\CreateContact();
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
            $category = $relationships->category->data;
            $newCategory = new RelationShipData();
            $newCategory->setId($category->id);
            $newCategory->setType($category->type);
            $contact->setCategory($newCategory);
        }

        if (isset($relationships->contact_portal->data)) {
            $contactPortal = $relationships->contact_portal->data;
            $newContactPortal = new RelationShipData();
            $newContactPortal->setId($contactPortal->id);
            $newContactPortal->setType($contactPortal->type);
            $contact->setContactPortal($newContactPortal);
        }

        if (isset($relationships->contact_people->data)) {
            $contactPeople = $relationships->contact_people->data;
            foreach ($contactPeople as $contactPerson) {
                $newContactPeople = new RelationShipData();
                $newContactPeople->setId($contactPerson->id);
                $newContactPeople->setType($contactPerson->type);
                $contact->addContactPeople($newContactPeople);
            }
        }

        return $contact;
    }
}