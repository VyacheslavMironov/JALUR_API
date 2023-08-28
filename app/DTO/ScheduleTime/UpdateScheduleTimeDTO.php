<?php

namespace App\DTO\ScheduleTime;

class UpdateScheduleTimeDTO
{
    public int $Id;
    public string $StartTime;

    public function __construct(int $Id, string $StartTime)
    {
        $this->Id = $Id;
        $this->StartTime = $StartTime;
    }
}
