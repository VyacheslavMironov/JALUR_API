<?php
namespace App\Domain\IService;

interface ITypeWorkoutsService
{
    public function CreateAction(\App\DTO\TypeWorkouts\CreateTypeWorkoutsDTO $context);
    public function ShowAction(\App\DTO\TypeWorkouts\ShowTypeWorkoutsDTO $context);
    public function AllAction();
    public function DeleteAction(\App\DTO\TypeWorkouts\DeleteTypeWorkoutsDTO $context);
}
