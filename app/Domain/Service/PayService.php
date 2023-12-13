<?php

namespace App\Domain\Service;

use App\Domain\IService\IPayService;
use App\DTO\Pay\PayRequestDTO;
use App\DTO\Pay\PayResponseDTO;
use App\Infrastructure\Repository\PayRepository;
use YooKassa\Client;

class PayService implements IPayService
{
    private Client $_client;
    protected PayRepository $_repository;
    public function __construct()
    {
        $this->_client = new Client();
        $this->_repository = new PayRepository();
    }

    private function Configuration()
    {
        return $this->_client->setAuth('shopId', 'key-dostupa');
    }

    private function PayRequest(PayRequestDTO $context)
    {
        return (array)$this->Configuration()->createPayment(
            array(
                'amount' => array(
                    'value' => $context->Value,
                    'currency' => 'RUB',
                ),
                'confirmation' => array(
                    'type' => 'redirect',
                    'return_url' => $context->RedirectUrl,
                ),
                'capture' => true,
                'description' => $context->Description,
            ),
            uniqid('', true)
        );
    }

    public function Pay(PayRequestDTO $context)
    {
        // TODO: Продебажить респонс!
        $response = $this->PayRequest($context);
        if (key_exists("status", $response))
        {
            return $this->_repository->create(
                new PayResponseDTO(
                    $response["id"],
                    $response["status"],
                    $response["created_at"],
                    $context->UserId,
                    $response["amount"]["value"],
                    $response["description"],
                )
            );
        }
        return $response;
    }
}
