<?php

namespace App\Infrastructure\Repository;

use App\Domain\IRepository\IGlampingRepository;
use App\DTO\Glamping\CreateGlampingDTO;
use App\DTO\Glamping\DeleteGlampingDTO;
use App\DTO\Glamping\ShowGlampingDTO;
use App\DTO\Glamping\UpdateGlampingDTO;
use App\Models\Glamping;

class GlampingRepository implements IGlampingRepository
{
    public function Create(CreateGlampingDTO $context)
    {
        $model = new Glamping();
        $model->Name = $context->Name;
        $model->Description = $context->Description;
        $model->Image = $context->Image;
        $model->Time = $context->Time;
        $model->Date = $context->Date;
        $model->save();
        return $model;
    }
    public function Update(UpdateGlampingDTO $context)
    {
        $model = Glamping::find($context->Id);
        $model->Name = $context->Name;
        $model->Description = $context->Description;
        $model->Image = $context->Image;
        $model->Time = $context->Time;
        $model->Date = $context->Date;
        $model->save();
        return $model;
    }
    public function Show(ShowGlampingDTO $context)
    {
        return Glamping::find($context->Id);
    }
    public function Delete(DeleteGlampingDTO $context)
    {
        $model = Glamping::find($context->Id);
        $model->delete();
        return $model;
    }
    public function All()
    {
        return Glamping::all();
    }
}
