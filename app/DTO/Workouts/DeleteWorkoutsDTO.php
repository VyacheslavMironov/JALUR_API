<?php 
namespace App\DTO\Workouts;

final class DeleteWorkoutsDTO
{
    public int $Id;

    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}
