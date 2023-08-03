<?php
namespace App\Infrastructure\Repository;

use App\DTO\Workouts\CreateWorkoutsDTO;
use App\DTO\Workouts\ShowWorkoutsDTO;
use App\DTO\Workouts\DeleteWorkoutsDTO;
use App\DTO\Workouts\UpdateWorkoutsDTO;
use App\Domain\IRepository\IWorkoutsRepository;
use App\Models\Workout;

final class WorkoutRepository implements IWorkoutsRepository
{
    public function Create(CreateWorkoutsDTO $context)
    {
        $model = new Workout();
        $model->TypeWorkoutId = $context->TypeWorkoutId;
        $model->Name = $context->Name;
        $model->Image = $context->Image;
        $model->Description = $context->Description;
        $model->save();
        return $model;
    }

    public function Show(ShowWorkoutsDTO $context)
    {
        return Workout::find($context->Id);
    }

    public function All()
    {
        return Workout::get()->latest();
    }

    public function Delete(DeleteWorkoutsDTO $context)
    {
        $model = Workout::find($context->Id);
        $model->delete();
        return $model;
    }

    public function Update(UpdateWorkoutsDTO $context)
    {
        $model = Workout::find($context->Id);
        $model->TypeWorkoutId = $context->TypeWorkoutId;
        $model->Name = $context->Name;
        $model->Image = $context->Image;
        $model->Description = $context->Description;
        $model->save();
        return $model;
    }
}