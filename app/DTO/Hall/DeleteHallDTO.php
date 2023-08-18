<?php

namespace App\DTO\Hall;

class DeleteHallDTO
{
    public int $Id;

    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}
