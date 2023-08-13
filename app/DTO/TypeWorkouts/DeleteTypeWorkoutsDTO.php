<?php 
namespace App\DTO\TypeWorkouts;

final class DeleteTypeWorkoutsDTO
{
    public int $Id;

    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}