<?php 
namespace App\DTO\TypeWorkouts;

final class ShowTypeWorkoutsDTO
{
    public int $Id;

    public function __construct(int $Id)
    {
        $this->Id = $Id;
    }
}