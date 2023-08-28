<?php

namespace App\DTO\Hall;

class ShowHallDTO
{
    public int $Id;

    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}
