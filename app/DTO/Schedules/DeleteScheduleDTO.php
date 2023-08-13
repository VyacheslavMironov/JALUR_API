<?php
namespace App\DTO\Schedules;

final class DeleteScheduleDTO
{
    public int $Id;

    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}