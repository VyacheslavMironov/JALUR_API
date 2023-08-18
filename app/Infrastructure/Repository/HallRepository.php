<?php

namespace App\Infrastructure\Repository;

use App\Domain\IRepository\IHallRepository;
use App\DTO\Hall\CreateHallDTO;
use App\DTO\Hall\DeleteHallDTO;
use App\DTO\Hall\ShowHallDTO;
use App\DTO\Hall\UpdateHallDTO;
use App\Models\Hall;

class HallRepository implements IHallRepository
{
    public function Create(CreateHallDTO $context)
    {
        $model = new Hall();
        $model->Name = $context->Name;
        $model->save();
        return $model;
    }

    public function Show(ShowHallDTO $context)
    {
        return Hall::find($context->Id);
    }

    public function All()
    {
        return Hall::get();
    }

    public function Update(UpdateHallDTO $context)
    {
        $model = Hall::find($context->Id);
        $model->Name = $context->Name;
        $model->save();
        return $model;
    }

    public function Delete(DeleteHallDTO $context)
    {
        $model = Hall::find($context->Id);
        $model->delete();
        return $model;
    }
}
