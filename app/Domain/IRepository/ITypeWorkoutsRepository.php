<?php
namespace App\Domain\IRepository;

interface ITypeWorkoutsRepository
{
    public function Create(\App\DTO\TypeWorkouts\CreateTypeWorkoutsDTO $context);
    public function Show(\App\DTO\TypeWorkouts\ShowTypeWorkoutsDTO $context);
    public function All();
    public function Delete(\App\DTO\TypeWorkouts\DeleteTypeWorkoutsDTO $context);
}
