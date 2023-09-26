<?php

namespace App\DTO\HistoryWorkouts;

class FilterHistoryWorkoutDTO
{
    public string|null $FirstName;
    public string|null $LastName;
    public string|null $Phone;
    public int|null $Couch;
    public string|null $DateWork;
    public string|null $WorkoutId;

    public function __construct(string|null $FirstName, string|null $LastName, string|null $Phone,
                                int|null $Couch, string|null $DateWork, string|null $WorkoutId)
    {
        $this->FirstName = $FirstName;
        $this->LastName = $LastName;
        $this->Phone = $Phone;
        $this->Couch = $Couch;
        $this->DateWork = $DateWork;
        $this->WorkoutId = $WorkoutId;
    }
}
