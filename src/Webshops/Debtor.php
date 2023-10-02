<?php

namespace KingSoftWare\Webshops;

use GuzzleHttp\Client;

class Debtor
{
    private Client $client;
    private string $baseUrl;

    public function __construct($client, $baseUrl)
    {
        $this->client = $client;
        $this->baseUrl = $baseUrl;
    }

    public function getDebtor(string $adminCode,string $debtorNumber): string
    {
        $response = $this->client->get($this->baseUrl . '/webshop/' . $adminCode . '/debiteuren/' . $debtorNumber);

        return $response->getBody()->getContents();
    }

}