<?php

namespace KingSoftWare\Webshops;

use GuzzleHttp\Client;

class Order
{
    private Client $client;
    private string $baseUrl;



    public function __construct($client, $baseUrl)
    {
        $this->client = $client;
        $this->baseUrl = $baseUrl;
    }

    public function getOrder(string $adminCode, string $orderNumber): string
    {
        $response = $this->client->get($this->baseUrl . '/webshop/' . $adminCode . '/' . 'Orders/' . $orderNumber);

        return $response->getBody()->getContents();
    }

}