<?php

namespace Parasut\Api;

use League\OAuth2\Client\Provider\GenericProvider;
use Parasut\Options;

class Connector extends Options
{
    /**
     * Connector constructor.
     */
    private function __construct()
    {
        if (empty(parent::getClient())) {
            parent::setClient(
                new GenericProvider([
                    'clientId' => parent::getClientId(),
                    'clientSecret' => parent::getClientSecret(),
                    'redirectUri' => parent::getRedirectUri(),
                    'urlAuthorize' => parent::getUrlAuthorize(),
                    'urlAccessToken' => parent::getUrlAccessToken(),
                    'urlResourceOwnerDetails' => parent::getUrlResourceOwnerDetails()
                ])
            );
        }
    }

    /**
     * @return GenericProvider
     */
    public static function getInstance()
    {
        if (empty(parent::getClient())) {
            new self;
        }

        return parent::getClient();
    }

    /**
     * @return \League\OAuth2\Client\Token\AccessToken|null
     */
    public static function getAccessToken()
    {
        $provider = self::getInstance();

        if (empty(parent::getAccessToken())) {
            parent::setAccessToken(
                $provider->getAccessToken('password', [
                    'username' => parent::getUsername(),
                    'password' => parent::getPassword()
                ])->getToken()
            );
        }

        return parent::getAccessToken();
    }
}