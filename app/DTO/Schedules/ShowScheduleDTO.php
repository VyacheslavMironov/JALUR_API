<?php
namespace App\DTO\Schedules;

final class ShowScheduleDTO
{
    public int $Id;

    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}