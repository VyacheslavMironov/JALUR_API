<?php

namespace App\DTO\ScheduleTime;

class CreateScheduleTimeDTO
{
    public string $StartTime;

    public function __construct(string $StartTime)
    {
        $this->StartTime = $StartTime;
    }
}
