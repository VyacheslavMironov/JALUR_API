<?php

namespace App\DTO\Schedules;

class ShowDateScheduleDTO
{
    public string $Date;
    public function __construct(string $Date)
    {
        $this->Date = $Date;
    } 
}
