<?php
namespace App\DTO\HistoryWorkouts;

final class ShowHistoryWorkoutsDTO
{
    public int $Id;

    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}
