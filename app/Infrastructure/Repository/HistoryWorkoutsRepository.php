<?php
namespace App\Infrastructure\Repository;

use App\DTO\HistoryWorkouts\CreateHistoryWorkoutsDTO;
use App\DTO\HistoryWorkouts\ShowHistoryWorkoutsDTO;
use App\DTO\HistoryWorkouts\UpdateHistoryWorkoutsDTO;
use App\DTO\HistoryWorkouts\DeleteHistoryWorkoutsDTO;
use App\Domain\IRepository\IHistoryWorkoutsRepository;
use App\Models\HistoryWorkouts;

final class HistoryWorkoutsRepository implements IHistoryWorkoutsRepository
{
    public function Create(CreateHistoryWorkoutsDTO $context)
    {
        $model = new HistoryWorkouts();
        $model->TypeWorkoutId = $context->TypeWorkoutId;
        $model->WorkoutId = $context->WorkoutId;
        $model->UserId = $context->UserId;
        $model->Active = $context->Active;
        $model->CountFreezingDay = $context->CountFreezingDay;
        $model->save();
        return $model;
    }

    public function Show(ShowHistoryWorkoutsDTO $context)
    {
        return HistoryWorkouts::find($context->Id);
    }

    public function All()
    {
        return HistoryWorkouts::get()->latest();
    }

    public function Update(UpdateHistoryWorkoutsDTO $context)
    {
        $model = HistoryWorkouts::find($context->Id);
        $model->TypeWorkoutId = $context->TypeWorkoutId;
        $model->WorkoutId = $context->WorkoutId;
        $model->UserId = $context->UserId;
        $model->Active = $context->Active;
        $model->CountFreezingDay = $context->CountFreezingDay;
        $model->save();
        return $model;
    }

    public function Delete(DeleteHistoryWorkoutsDTO $context)
    {
        $model = HistoryWorkouts::find($context->Id);
        $model->delete();
        return $model;
    }
}