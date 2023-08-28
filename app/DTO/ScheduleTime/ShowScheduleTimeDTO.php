<?php

namespace App\DTO\ScheduleTime;

class ShowScheduleTimeDTO
{
    public int $Id;
    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}
