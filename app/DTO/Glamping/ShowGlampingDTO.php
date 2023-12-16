<?php

namespace App\DTO\Glamping;

class ShowGlampingDTO
{
    public int $Id;
    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}
