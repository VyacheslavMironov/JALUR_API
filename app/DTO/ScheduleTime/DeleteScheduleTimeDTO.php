<?php

namespace App\DTO\ScheduleTime;

class DeleteScheduleTimeDTO
{
    public int $Id;
    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}
