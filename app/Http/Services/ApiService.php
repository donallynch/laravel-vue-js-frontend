<?php

namespace App\Http\Services;

/**
 * Class ApiService
 * @package App\Services
 */
class ApiService {

    /** @var string|null $apiKey */
    private $apiKey = null;

    /** @var array $endpoints */
    private $endpoints = [
        'breweryDb' => [
            'credentials' => [
                'baseUrl' => 'https://sandbox-api.brewerydb.com/v2',
                'apiKey' => '?key=3ab3775d8a65bb08ccf2a960510c7640'
            ],
            'endpoints' => [
                'beers' => 'beers'
            ]
        ]
    ];

    /** @var  $data */
    private $data;

    /** @var string|null $now */
    private $now = null;

    /** @var \GuzzleHttp\Client $client */
    private $client;

    /**
     * ApiService constructor.
     */
    public function __construct()
    {
        $this->client = new \GuzzleHttp\Client();
        $this->now = date('Y-m-d H:i:s');
    }

    /**
     * @return $this
     */
    public function beers()
    {
        $endpoint = $this->endpoints['breweryDb']['credentials']['baseUrl'];
        $route = $this->endpoints['breweryDb']['endpoints']['beers'];
        $key = $this->endpoints['breweryDb']['credentials']['apiKey'];

        $this->retrieveDataFromApi("{$endpoint}/{$route}/{$key}");

        return $this;
    }

    /**
     * @param $endpoint
     * @param null $authorizationBearer
     * @return bool
     */
    private function retrieveDataFromApi($endpoint, $authorizationBearer = null)
    {
        $data = [
            'debug' => false
        ];

        if ($authorizationBearer !== null) {
            $data['Authorization'] = "Bearer {$authorizationBearer}";
        }

        try {
            /* Make asynchronous request */
            $request = new \GuzzleHttp\Psr7\Request('GET', $endpoint, $data);
            $promise = $this->client->sendAsync($request)->then(function ($response) {

                /* Ensure expected response code */
                if ($response->getStatusCode() !== 200) {
                    exit("Exception thrown during retrieveDataFromApi for request: {$endpoint}");
                }

                /* On success */
                $this->data = $response
                    ->getBody()
                    ->getContents();
            });

            $promise->wait();
        } catch (\Exception $e) {

            /* On success */
            $this->data = $e;

            echo'<pre>';
            print_r($e->getMessage());
            echo'</pre>';
            die('Died during code debug.');
        }

        return true;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
}

