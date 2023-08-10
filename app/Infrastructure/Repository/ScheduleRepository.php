<?php
namespace App\Infrastructure\Repository;

use App\DTO\Schedules\CreateScheduleDTO;
use App\DTO\Schedules\ShowScheduleDTO;
use App\DTO\Schedules\UpdateScheduleDTO;
use App\DTO\Schedules\DeleteScheduleDTO;
use App\Domain\IRepository\IScheduleRepository;
use App\Models\Schedule;

final class ScheduleRepository implements IScheduleRepository
{
    public function Create(CreateScheduleDTO $context)
    {
        $model = new Schedule();
        $model->WorkoutId = $context->WorkoutId;
        $model->Couch = $context->Couch;
        $model->WeekDay = $context->WeekDay;
        $model->StartDate = $context->StartDate;
        $model->StartTime = $context->StartTime;
        $model->EndTime = $context->EndTime;
        $model->save();
        return $model;
    }

    public function Show(ShowScheduleDTO $context)
    {
        return Schedule::find($context->Id);
    }

    public function All()
    {
        return Schedule::get();
    }

    public function Update(UpdateScheduleDTO $context)
    {
        $model = Schedule::find($context->Id);
        $model->WorkoutId = $context->WorkoutId;
        $model->Couch = $context->Couch;
        $model->WeekDay = $context->WeekDay;
        $model->StartDate = $context->StartDate;
        $model->StartTime = $context->StartTime;
        $model->EndTime = $context->EndTime;
        $model->save();
        return $model;
    }

    public function Delete(DeleteScheduleDTO $context)
    {
        $model = Schedule::find($context->Id);
        $model->delete();
        return $model;
    }
}
