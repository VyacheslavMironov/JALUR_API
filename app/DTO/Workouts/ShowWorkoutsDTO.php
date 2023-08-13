<?php 
namespace App\DTO\Workouts;

final class ShowWorkoutsDTO
{
    public int $Id;

    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}
