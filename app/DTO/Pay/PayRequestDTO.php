<?php

namespace App\DTO\Pay;

final class PayRequestDTO
{
    public int $UserId;
    public float $Value;
    public string $RedirectUrl;
    public string $Description;

    public function __construct(int $UserId, float $Value, string $RedirectUrl, string $Description)
    {
        $this->UserId = $UserId;
        $this->Value = $Value;
        $this->RedirectUrl = $RedirectUrl;
        $this->Description = $Description;
    }
}
