<?php

namespace Parasut;


class Options
{
    private static $client;
    private static $accessToken;
    private static $baseUrl;
    private static $clientId;
    private static $clientSecret;
    private static $redirectUri = 'urn:ietf:wg:oauth:2.0:oob';
    private static $urlAuthorize;
    private static $urlAccessToken;
    private static $urlResourceOwnerDetails;
    private static $username;
    private static $password;
    private static $companyId;

    /**
     * @return null
     */
    public static function getClient()
    {
        return self::$client;
    }

    /**
     * @param null $client
     */
    public static function setClient($client)
    {
        self::$client = $client;
    }

    /**
     * @return mixed
     */
    public static function getAccessToken()
    {
        return self::$accessToken;
    }

    /**
     * @param $accessToken
     */
    public static function setAccessToken($accessToken)
    {
        self::$accessToken = $accessToken;
    }

    /**
     * @return mixed
     */
    public static function getBaseUrl()
    {
        return self::$baseUrl;
    }

    /**
     * @param mixed $baseUrl
     */
    public static function setBaseUrl($baseUrl)
    {
        self::$baseUrl = $baseUrl;
    }

    /**
     * @return mixed
     */
    public static function getClientId()
    {
        return self::$clientId;
    }

    /**
     * @param mixed $clientId
     */
    public static function setClientId($clientId)
    {
        self::$clientId = $clientId;
    }

    /**
     * @return mixed
     */
    public static function getClientSecret()
    {
        return self::$clientSecret;
    }

    /**
     * @param mixed $clientSecret
     */
    public static function setClientSecret($clientSecret)
    {
        self::$clientSecret = $clientSecret;
    }

    /**
     * @return string
     */
    public static function getRedirectUri()
    {
        return self::$redirectUri;
    }

    /**
     * @param string $redirectUri
     */
    public static function setRedirectUri($redirectUri)
    {
        self::$redirectUri = $redirectUri;
    }

    /**
     * @return mixed
     */
    public static function getUrlAuthorize()
    {
        return self::$urlAuthorize;
    }

    /**
     * @param mixed $urlAuthorize
     */
    public static function setUrlAuthorize($urlAuthorize)
    {
        self::$urlAuthorize = $urlAuthorize;
    }

    /**
     * @return mixed
     */
    public static function getUrlAccessToken()
    {
        return self::$urlAccessToken;
    }

    /**
     * @param mixed $urlAccessToken
     */
    public static function setUrlAccessToken($urlAccessToken)
    {
        self::$urlAccessToken = $urlAccessToken;
    }

    /**
     * @return mixed
     */
    public static function getUrlResourceOwnerDetails()
    {
        return self::$urlResourceOwnerDetails;
    }

    /**
     * @param mixed $urlResourceOwnerDetails
     */
    public static function setUrlResourceOwnerDetails($urlResourceOwnerDetails)
    {
        self::$urlResourceOwnerDetails = $urlResourceOwnerDetails;
    }

    /**
     * @return mixed
     */
    public static function getUsername()
    {
        return self::$username;
    }

    /**
     * @param mixed $username
     */
    public static function setUsername($username)
    {
        self::$username = $username;
    }

    /**
     * @return mixed
     */
    public static function getPassword()
    {
        return self::$password;
    }

    /**
     * @param mixed $password
     */
    public static function setPassword($password)
    {
        self::$password = $password;
    }

    /**
     * @return mixed
     */
    public static function getCompanyId()
    {
        return self::$companyId;
    }

    /**
     * @param mixed $companyId
     */
    public static function setCompanyId($companyId)
    {
        self::$companyId = $companyId;
    }
}