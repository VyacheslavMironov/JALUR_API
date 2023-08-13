<?php
namespace App\DTO\User;

final class LogoutUserDTO
{
    public int $Id;

    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}
