<?php
namespace App\Infrastructure\Repository;

use App\DTO\HistoryWorkouts\CreateHistoryWorkoutsDTO;
use App\DTO\HistoryWorkouts\FilterHistoryWorkoutDTO;
use App\DTO\HistoryWorkouts\ShowHistoryWorkoutsDTO;
use App\DTO\HistoryWorkouts\UpdateHistoryWorkoutsDTO;
use App\DTO\HistoryWorkouts\DeleteHistoryWorkoutsDTO;
use App\Domain\IRepository\IHistoryWorkoutsRepository;
use App\Models\HistoryWorkouts;
use App\Models\Schedule;
use App\Models\User;
use App\Models\Workout;
use App\Models\Record;
use Illuminate\Support\Facades\DB;

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
        $data = array();
        $model = HistoryWorkouts::find($context->Id);
        $model->delete();
        return $model;
    }

    public function Filter(FilterHistoryWorkoutDTO $context)
    {
        $data = array();
        $users = null;
        $schedules = null;
        if ($context->WorkoutId || $context->DateWork)
        {
            $schedules = DB::table('schedules')
                ->when($context->WorkoutId, function ($query, $workout) {
                    return $query->where('WorkoutId', $workout);
                })
                ->when($context->DateWork, function ($query, $date_work) {
                    return $query->where('DateWork', $date_work);
                })
                ->get();
        }
        else
        {
            $schedules = Schedule::get();
        }

        if ($context->FirstName || $context->LastName || $context->Phone || $context->Couch)
        {
            $users = DB::table('users')
                ->when($context->FirstName, function ($query, $name) {
                    return $query->where('FirstName', $name);
                })
                ->when($context->LastName, function ($query, $surname) {
                    return $query->where('LastName', $surname);
                })
                ->when($context->Phone, function ($query, $phone_number) {
                    return $query->where('Phone', $phone_number);
                })
                ->when($context->Couch, function ($query, $id) {
                    return $query->where('id', $id);
                })
                ->get();
        }

        foreach (Record::get() as $item)
        {
            $count = count($data);
            if ($users)
            {
                foreach ($users as $user)
                {
                    if ($user->id == $item->UserId)
                    {
                        array_push($data, $item);
                    }
                }
                if ($count != count($data))
                {
                    foreach ($schedules as $schedule)
                    {
                        if ($schedule->id == $item->ScheduleId)
                        {
                            array_push($data, $item);
                        }
                    }
                }
            }
            elseif ($schedules)
            {
                foreach ($schedules as $schedule)
                {
                    if ($schedule->id == $item->ScheduleId)
                    {
                        array_push($data, $item);
                    }
                }
            }
        }
        return array_unique($data);
    }
}
