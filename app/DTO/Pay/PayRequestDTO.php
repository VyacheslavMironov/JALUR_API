<?php

namespace App\DTO\Pay;

final class PayRequestDTO
{
    public float $value;
    public string $redirect_url;
    public string $description;

    public function __construct(float $value, string $redirect_url, string $description)
    {
        $this->value = $value;
        $this->redirect_url = $redirect_url;
        $this->description = $description;
    }
}
