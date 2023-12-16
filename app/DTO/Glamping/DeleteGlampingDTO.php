<?php

namespace App\DTO\Glamping;

class DeleteGlampingDTO
{
    public int $Id;
    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}
