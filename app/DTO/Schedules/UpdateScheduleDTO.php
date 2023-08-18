<?php
namespace App\DTO\Schedules;

final class UpdateScheduleDTO
{
    public int $Id;
    public int $HallId;
    public int $WorkoutId;
    public int $Couch;
    public string $DateWork;
    public int $ScheduleTimeId;

    public function __construct(int $Id, int $HallId, int $WorkoutId, int $Couch,
                            string $DateWork, int $ScheduleTimeId)
    {
        $this->Id = $Id;
        $this->HallId = $HallId;
        $this->WorkoutId = $WorkoutId;
        $this->Couch = $Couch;
        $this->DateWork = $DateWork;
        $this->ScheduleTimeId = $ScheduleTimeId;
    }
}