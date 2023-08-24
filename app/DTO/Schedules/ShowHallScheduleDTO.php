<?php

namespace App\DTO\Schedules;

class ShowHallScheduleDTO
{
    public int $HallId;

    public function __construct(int $HallId)
    {
        $this->HallId = $HallId;
    }
}
