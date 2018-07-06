<?php

namespace Parasut\Api;

use Parasut\Options;
use Parasut\ParasutException;

class Client
{
    /**
     * @return resource
     */
    private function getCh()
    {
        return curl_init(Options::getBaseUrl());
    }

    /**
     * @param $ch
     * @param $url
     * @return mixed
     */
    private function send($ch, $url)
    {
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . Connector::getAccessToken(),
            'Content-Type: application/json'
        ));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        return curl_exec($ch);
    }

    /**
     * @param $url
     * @return mixed
     */
    protected function getRequest($url)
    {
        return $this->sendRequest($this->getCh(), $url);
    }

    /**
     * @param $url
     * @param $data
     * @return mixed
     */
    protected function postRequest($url, $data)
    {
        $ch = $this->getCh();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        return $this->sendRequest($ch, $url);
    }

    /**
     * @param $url
     * @param $data
     * @return mixed
     */
    protected function putRequest($url, $data)
    {
        $ch = $this->getCh();
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

        return $this->sendRequest($ch, $url);
    }

    /**
     * @param $ch
     * @param $url
     * @param $recursive
     * @return mixed
     * @throws ParasutException
     */
    private function sendRequest($ch, $url, $recursive = false)
    {
        if (!$recursive) {
            $url = sprintf('%s/%s/%s', Options::getBaseUrl(), Options::getCompanyId(), $url);
        }

        $response = json_decode(
            $this->send($ch, $url)
        );

        if (!$this->errorHandler($response)) {
            $response = $this->sendRequest($ch, $url, true);
        }

        return $response;
    }

    /**
     * @param $response
     * @return bool
     * @throws ParasutException
     */
    private function errorHandler($response)
    {
        if (isset($response->error) || empty($response)) {
            Options::setAccessToken(null);
            return false;
        }

        if (isset($response->errors)) {
            $exception = new ParasutException('Something went wrong. Please check details.');
            $exception->setDetails($response->errors);
            throw $exception;
        }

        return true;
    }
}