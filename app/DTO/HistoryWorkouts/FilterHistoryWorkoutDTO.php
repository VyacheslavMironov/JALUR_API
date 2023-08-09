<?php

namespace App\DTO\HistoryWorkouts;

class FilterHistoryWorkoutDTO
{
    public string|null $FirstName;
    public string|null $LastName;
    public string|null $Phone;
    public int|null $Couch;
    public string|null $WeekDay;
    public string|null $WorkoutId;

    public function __construct(string|null $FirstName, string|null $LastName, string|null $Phone,
                                int|null $Couch, string|null $WeekDay, string|null $WorkoutId)
    {
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->Phone = $Phone;
        $this->Couch = $Couch;
        $this->WeekDay = $WeekDay;
        $this->WorkoutId = $WorkoutId;
    }
}
