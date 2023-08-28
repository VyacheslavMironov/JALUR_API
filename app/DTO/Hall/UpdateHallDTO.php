<?php

namespace App\DTO\Hall;

class UpdateHallDTO
{
    public int $Id;
    public string $Name;

    public function __construct(string $Name, int $Id)
    {
        $this->Id = $Id;
        $this->Name = $Name;
    }
}
