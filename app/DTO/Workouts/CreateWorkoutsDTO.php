<?php
namespace App\DTO\Workouts;

final class CreateWorkoutsDTO
{
    public int $TypeWorkoutId;
    public string $Name;
    public string $Image;
    public string $Description;

    public function __construct(int $TypeWorkoutId, string $Name, string $Image, string $Description)
    {
        $this->TypeWorkoutId = $TypeWorkoutId;
        $this->Name = $Name;
        $this->Image = $Image;
        $this->Description = $Description;
    }
}
