<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Service\ScheduleService;
use App\DTO\Schedules\CreateScheduleDTO;
use App\DTO\Schedules\DeleteScheduleDTO;
use App\DTO\Schedules\UpdateScheduleDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\ScheduleCreateRequest;
use App\Http\Requests\ScheduleUpdateRequest;
use Illuminate\Http\Request;

class PostSchedulesController extends Controller
{
    public function create(ScheduleCreateRequest $request, ScheduleService $service)
    {
        $request->validated();
        $service->CreateAction(
            new CreateScheduleDTO(
                $request['hallId'],
                $request['workoutId'],
                $request['couch'],
                $request['dateWork'],
                $request['scheduleTimeId']
            )
        );
        return back();
    }

    public function update(ScheduleUpdateRequest $request, ScheduleService $service)
    {
        $request->validated();
        $service->UpdateAction(
            new UpdateScheduleDTO(
                $request['id'],
                $request['hallId'],
                $request['workoutId'],
                $request['couch'],
                $request['dateWork'],
                $request['scheduleTimeId']
            )
        );
        return back();
    }

    public function delete(int $id, ScheduleService $service)
    {
        $service->DeleteAction(new DeleteScheduleDTO($id));
        return back();
    }
}
