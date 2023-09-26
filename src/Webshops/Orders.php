<?php

namespace KingSoftWare\Webshops;

use GuzzleHttp\Client;

class Orders
{
    private Client $client;
    private string $baseUrl;



    public function __construct($client, $baseUrl)
    {
        $this->client = $client;
        $this->baseUrl = $baseUrl;
    }

    public function getOrders(string $adminCode): string
    {
        $response = $this->client->get($this->baseUrl . '/webshop/' . $adminCode . '/' . 'Orders?Skip=0&Take=100');

        return $response->getBody()->getContents();
    }
}