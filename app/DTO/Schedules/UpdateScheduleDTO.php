<?php
namespace App\DTO\Schedules;

final class UpdateScheduleDTO
{
    public int $Id;
    public int $WorkoutId;
    public int $Couch;
    public string $WeekDay;
    public bool $Active;
    public int $ScheduleTimeId;

    public function __construct(int $Id, int $WorkoutId, int $Couch, string $WeekDay, 
                                bool $Active, int $ScheduleTimeId)
    {
        $this->Id = $Id;
        $this->WorkoutId = $WorkoutId;
        $this->Couch = $Couch;
        $this->WeekDay = $WeekDay;
        $this->Active = $Active;
        $this->ScheduleTimeId = $ScheduleTimeId;
    }
}