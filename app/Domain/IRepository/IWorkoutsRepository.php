<?php
namespace App\Domain\IRepository;

interface IWorkoutsRepository
{
    public function Create(\App\DTO\Workouts\CreateWorkoutsDTO $context);
    public function Show(\App\DTO\Workouts\ShowWorkoutsDTO $context);
    public function All();
    public function Delete(\App\DTO\Workouts\DeleteWorkoutsDTO $context);
    public function Update(\App\DTO\Workouts\UpdateWorkoutsDTO $context);
}
