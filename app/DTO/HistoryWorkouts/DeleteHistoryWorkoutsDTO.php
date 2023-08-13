<?php
namespace App\DTO\HistoryWorkouts;

final class DeleteHistoryWorkoutsDTO
{
    public int $Id;

    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}
