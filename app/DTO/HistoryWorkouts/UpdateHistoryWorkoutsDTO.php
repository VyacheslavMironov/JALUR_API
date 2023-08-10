<?php
namespace App\DTO\HistoryWorkouts;

final class UpdateHistoryWorkoutsDTO
{
    public int $Id;
    public int $TypeWorkoutId;
    public int $WorkoutId;
    public int $UserId;
    public bool $Active;
    public int $CountFreezingDay;

    public function __construct(int $Id, int $TypeWorkoutId, int $WorkoutId, int $UserId, bool $Active, int $CountFreezingDay)
    {
        $this->Id = $Id;
        $this->TypeWorkoutId = $TypeWorkoutId;
        $this->WorkoutId = $WorkoutId;
        $this->UserId = $UserId;
        $this->Active = $Active;
        $this->CountFreezingDay = $CountFreezingDay;
    }
}
