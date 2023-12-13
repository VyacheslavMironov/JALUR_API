<?php

namespace App\Domain\IService;

use App\DTO\Pay\PayRequestDTO;
use App\Infrastructure\Repository\PayRepository;

interface IPayService
{
    public function Pay(PayRequestDTO $context);
}
