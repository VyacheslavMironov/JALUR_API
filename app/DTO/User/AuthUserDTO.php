<?php
namespace App\DTO\User;

final class AuthUserDTO
{
    public string $Phone;
    public string $Password;

    public function __construct(string $Phone, string $Password)
    {
        $this->Phone = $Phone;
        $this->Password = $Password;
    }
}