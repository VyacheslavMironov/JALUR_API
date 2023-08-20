<?php
namespace App\Infrastructure\Repository;

use App\DTO\Schedules\CreateScheduleDTO;
use App\DTO\Schedules\ShowScheduleDTO;
use App\DTO\Schedules\UpdateScheduleDTO;
use App\DTO\Schedules\DeleteScheduleDTO;
use App\DTO\Schedules\ShowHallScheduleDTO;
use App\Domain\IRepository\IScheduleRepository;
use App\DTO\Schedules\ShowDateScheduleDTO;
use App\Models\Schedule;
use App\Models\ScheduleTime;
use App\Models\User;
use App\Models\Workout;

final class ScheduleRepository implements IScheduleRepository
{
    public function Create(CreateScheduleDTO $context)
    {
        $model = new Schedule();
        $model->HallId = $context->HallId;
        $model->WorkoutId = $context->WorkoutId;
        $model->Couch = $context->Couch;
        $model->DateWork = $context->DateWork;
        $model->ScheduleTimeId = $context->ScheduleTimeId;
        $model->save();
        return $model;
    }

    public function Show(ShowScheduleDTO $context)
    {
        return Schedule::find($context->Id);
    }

    public function ShowByHall(ShowHallScheduleDTO $context)
    {
        return Schedule::where('HallId', $context->HallId)->get();
    }

    public function ShowByDate(ShowDateScheduleDTO $context)
    {
        $rows = Schedule::where('DateWork', $context->Date)
            ->where('HallId', $context->HallId)
            ->get();
        foreach ($rows as &$row)
        {
            $row->Time = ScheduleTime::find($row->ScheduleTimeId);
            $row->Workout = Workout::find($row->WorkoutId);
            $row->CouchUser = User::find($row->Couch);
        }
        return $rows;
    }

    public function All()
    {
        return Schedule::get()->latest();
    }

    public function Update(UpdateScheduleDTO $context)
    {
        $model = Schedule::find($context->Id);
        $model->HallId = $context->HallId;
        $model->WorkoutId = $context->WorkoutId;
        $model->Couch = $context->Couch;
        $model->DateWork = $context->DateWork;
        $model->ScheduleTimeId = $context->ScheduleTimeId;
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
