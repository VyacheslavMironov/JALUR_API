<?php
namespace App\DTO\User;

final class CodeUserDTO
{
    public string $Phone;

    public function __construct(string $Phone)
    {
        $this->Phone = $Phone;
    }
}