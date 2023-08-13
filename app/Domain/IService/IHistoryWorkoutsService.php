<?php
namespace App\Domain\IService;

interface IHistoryWorkoutsService
{
    public function CreateAction(\App\DTO\HistoryWorkouts\CreateHistoryWorkoutsDTO $context);
    public function ShowAction(\App\DTO\HistoryWorkouts\ShowHistoryWorkoutsDTO $context);
    public function AllAction();
    public function UpdateAction(\App\DTO\HistoryWorkouts\UpdateHistoryWorkoutsDTO $context);
    public function DeleteAction(\App\DTO\HistoryWorkouts\DeleteHistoryWorkoutsDTO $context);
    public function FilterAction(\App\DTO\HistoryWorkouts\FilterHistoryWorkoutDTO $context);
}
