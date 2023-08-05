<?php
namespace App\Infrastructure\Repository;

use App\DTO\TypeWorkouts\CreateTypeWorkoutsDTO;
use App\DTO\TypeWorkouts\ShowTypeWorkoutsDTO;
use App\DTO\TypeWorkouts\DeleteTypeWorkoutsDTO;
use App\Domain\IRepository\ITypeWorkoutsRepository;
use App\Models\TypeWorkouts;

final class TypeWorkoutsRepository implements ITypeWorkoutsRepository
{
    public function Create(CreateTypeWorkoutsDTO $context)
    {
        $model = new TypeWorkouts();
        $model->Name = $context->Name;
        $model->save();
        return $model;
    }
    public function Show(ShowTypeWorkoutsDTO $context)
    {
        return TypeWorkouts::find($context->Id);
    }

    public function All()
    {
        return TypeWorkouts::get();
    }

    public function Delete(DeleteTypeWorkoutsDTO $context)
    {
        $model = TypeWorkouts::find($context->Id);
        $model->delete();
        return $model;
    }
}