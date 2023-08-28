<?php

namespace App\DTO\Hall;

class CreateHallDTO
{
    public string $Name;

    public function __construct(string $Name)
    {
        $this->Name = $Name;
    }
}
