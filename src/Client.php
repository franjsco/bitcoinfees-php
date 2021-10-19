<?php

namespace Franjsco\Bitcoinfees;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\RequestException;

class Client
{
    private $httpClient;
    protected const BASE_URI = 'https://bitcoinfees.earn.com/api/v1/fees/recommended';

    public function __construct()
    {
        $this->httpClient = new GuzzleClient(['base_uri' => self::BASE_URI]);
    }


    public function getHttpClient(): GuzzleClient
    {
        return $this->httpClient;
    }


    public function getData() 
    {   
        try {
            $response = $this->httpClient->request('GET');
            $body = (string) $response->getBody();

            return $this->transformData($body);
        } catch (RequestException $e) {
            return [];
        }
    }


    private function transformData($jsonData)
    {
        $data = json_decode($jsonData, true);
        return $data;
    }


}