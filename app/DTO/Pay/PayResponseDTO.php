<?php

namespace App\DTO\Pay;

final class PayResponseDTO
{
    public string $PayId;
    public string $StatusPay;
    public string $DatePay;
    public int $UserId;
    public float $Value;
    public string $Description;

    public function __construct(string $PayId, string $StatusPay, string $DatePay, 
                                    int $UserId, float $Value, string $Description)
    {
        $this->PayId = $PayId;
        $this->StatusPay = $StatusPay;
        $this->DatePay = $DatePay;
        $this->UserId = $UserId;
        $this->Value = $Value;
        $this->Description = $Description;
    }
}
