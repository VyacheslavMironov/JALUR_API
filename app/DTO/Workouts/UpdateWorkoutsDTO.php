<?php 
namespace App\DTO\Workouts;

final class UpdateWorkoutsDTO
{
    public int $Id;
    public int $TypeWorkoutId;
    public string $Name;
    public string $Image;
    public string $Description;

    public function __construct(int $Id, int $TypeWorkoutId, string $Name, string $Image, string $Description)
    {
        $this->Id = $Id;
        $this->TypeWorkoutId = $TypeWorkoutId;
        $this->Name = $Name;
        $this->Image = $Image;
        $this->Description = $Description;
    }
}
