<?php

namespace KingSoftWare;

use GuzzleHttp\Client;
use KingSoftWare\Webshops\Debtor;
use KingSoftWare\Webshops\Order;
use KingSoftWare\Webshops\Orders;

class ApiClient
{
    protected Client $httpClient;
    const BASE_URL = 'https://api.king.eu/dyn';
    public function __construct(Client $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    public function orders(): Orders
    {
        return new Orders($this->httpClient, self::BASE_URL);
    }

    public function order(): Order
    {
        return  new Order($this->httpClient, self::BASE_URL);
    }

    public function debtor(): Debtor
    {
        return  new Debtor($this->httpClient, self::BASE_URL);
    }
}
