<?php
namespace App\Domain\IService;

interface IWorkoutService
{
    public function CreateAction(\App\DTO\Workouts\CreateWorkoutsDTO $context);
    public function ShowAction(\App\DTO\Workouts\ShowWorkoutsDTO $context);
    public function AllAction();
    public function DeleteAction(\App\DTO\Workouts\DeleteWorkoutsDTO $context);
    public function UpdateAction(\App\DTO\Workouts\UpdateWorkoutsDTO $context);
}
