<?php
namespace App\DTO\Schedules;

final class CreateScheduleDTO
{
    public int $WorkoutId;
    public int $Couch;
    public string $WeekDay;
    public bool $Active;
    public int $ScheduleTimeId;

    public function __construct(int $WorkoutId, int $Couch, string $WeekDay, bool $Active,
                                int $ScheduleTimeId)
    {
        $this->WorkoutId = $WorkoutId;
        $this->Couch = $Couch;
        $this->WeekDay = $WeekDay;
        $this->Active = $Active;
        $this->ScheduleTimeId = $ScheduleTimeId;
    }
}