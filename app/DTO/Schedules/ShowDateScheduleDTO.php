<?php

namespace App\DTO\Schedules;

class ShowDateScheduleDTO
{
    public string $Date;
    public int $HallId;
    public function __construct(string $Date, int $HallId)
    {
        $this->Date = $Date;
        $this->HallId = $HallId;
    } 
}
