<?php

namespace KingSoftWare\Environment;

use GuzzleHttp\Client;
class Administration
{
    private Client $client;

    public function __construct($client)
    {
        $this->client = $client;
    }

    public function getAdministration(): string
    {
        $response = $this->client->post('https://api.king.eu/api/Environment/GetToegankelijkeAdminstraties');

        return $response->getBody()->getContents();
    }
}