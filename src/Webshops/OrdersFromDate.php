<?php

namespace KingSoftWare\Webshops;

use GuzzleHttp\Client;

class OrdersFromDate
{
    private Client $client;
    private string $baseUrl;

    public function __construct($client, $baseUrl)
    {
        $this->client = $client;
        $this->baseUrl = $baseUrl;
    }

    public function getOrdersFromDate(string $adminCode, string $date): string
    {
        $response = $this->client->get($this->baseUrl . '/webshop/' . $adminCode . '/Orders/Modified/' . $date . '?Skip=0&Take=0');

        return $response->getBody()->getContents();
    }
}