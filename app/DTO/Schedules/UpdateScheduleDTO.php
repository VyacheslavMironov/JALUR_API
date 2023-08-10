<?php
namespace App\DTO\Schedules;

final class UpdateScheduleDTO
{
    public int $Id;
    public int $WorkoutId;
    public int $Couch;
    public string $WeekDay;
    public string $StartDate;
    public string $StartTime;
    public string $EndTime;

    public function __construct(int $Id, int $WorkoutId, int $Couch, string $WeekDay, 
                                string $StartDate, string $StartTime, string $EndTime)
    {
        $this->Id = $Id;
        $this->WorkoutId = $WorkoutId;
        $this->Couch = $Couch;
        $this->Couch = $Couch;
        $this->WeekDay = $WeekDay;
        $this->StartDate = $StartDate;
        $this->StartTime = $StartTime;
        $this->EndTime = $EndTime;
    }
}