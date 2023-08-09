<?php
namespace App\Domain\IRepository;

interface IHistoryWorkoutsRepository
{
    public function Create(\App\DTO\HistoryWorkouts\CreateHistoryWorkoutsDTO $context);
    public function Show(\App\DTO\HistoryWorkouts\ShowHistoryWorkoutsDTO $context);
    public function All();
    public function Update(\App\DTO\HistoryWorkouts\UpdateHistoryWorkoutsDTO $context);
    public function Delete(\App\DTO\HistoryWorkouts\DeleteHistoryWorkoutsDTO $context);
    public function Filter(\App\DTO\HistoryWorkouts\FilterHistoryWorkoutDTO $context);
}
