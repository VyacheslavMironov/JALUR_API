<?php 
namespace App\DTO\TypeWorkouts;

final class CreateTypeWorkoutsDTO
{
    public string $Name;

    public function __construct(string $Name)
    {
        $this->Name = $Name;
    }
}