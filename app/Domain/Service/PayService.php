<?php

namespace App\Domain\Service;

use App\Domain\IService\IPayService;
use YooKassa\Client;

class PayService implements IPayService
{
    private Client $_client;
    public function __construct()
    {
        $this->_client = new Client();
    }

    private function configuration()
    {
        return $this->_client->setAuth('shopId', 'key-dostupa');
    }

    public function pay()
    {
        return $this->configuration()->createPayment(
            array(
                'amount' => array(
                    'value' => 100.0,
                    'currency' => 'RUB',
                ),
                'confirmation' => array(
                    'type' => 'redirect',
                    'return_url' => 'https://www.example.com/return_url',
                ),
                'capture' => true,
                'description' => 'Заказ №1',
            ),
            uniqid('', true)
        );
    }
}
