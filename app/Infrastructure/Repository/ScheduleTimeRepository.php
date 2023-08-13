<?php

namespace App\Infrastructure\Repository;

use App\Domain\IRepository\IScheduleTimeRepository;
use App\DTO\ScheduleTime\CreateScheduleTimeDTO;
use App\DTO\ScheduleTime\ShowScheduleTimeDTO;
use App\DTO\ScheduleTime\UpdateScheduleTimeDTO;
use App\DTO\ScheduleTime\DeleteScheduleTimeDTO;
use App\Models\ScheduleTime;

class ScheduleTimeRepository implements IScheduleTimeRepository
{
    public function Create(CreateScheduleTimeDTO $context)
    {
        $model = new ScheduleTime();
        $model->StartTime = $context->StartTime;
        $model->save();
        return $model;
    }

    public function Show(ShowScheduleTimeDTO $context)
    {
        return ScheduleTime::find($context->Id)
            ->get();
    }

    public function All()
    {
        return ScheduleTime::get();
    }

    public function Update(UpdateScheduleTimeDTO $context)
    {
        $model = ScheduleTime::find($context->Id);
        $model->StartTime = $context->StartTime;
        $model->save();
        return $model;
    }
    public function Delete(DeleteScheduleTimeDTO $context)
    {
        $model = ScheduleTime::find($context->Id);
        $model->delete();
        return $model;
    }
}
