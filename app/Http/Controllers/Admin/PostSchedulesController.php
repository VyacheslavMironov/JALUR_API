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
        $context = $request->validated();
        $service->CreateAction(
            new CreateScheduleDTO(
                $request['workoutId'],
                $request['couch'],
                $request['weekDay'],
                date('d-m-Y'),
                $request['startTime'],
                $request['endTime']
            )
        );
        return redirect()->route('admin.schedules');
    }

    public function update(ScheduleUpdateRequest $request, ScheduleService $service)
    {
        $context = $request->validated();
        $service->UpdateAction(
            new UpdateScheduleDTO(
                $request['id'],
                $request['workoutId'],
                $request['couch'],
                $request['weekDay'],
                date('d-m-Y'),
                $request['startTime'],
                $request['endTime']
            )
        );
        return redirect()->route('admin.schedules');
    }

    public function delete(int $id, ScheduleService $service)
    {
        $service->DeleteAction(new DeleteScheduleDTO($id));
        return redirect()->route('admin.schedules');
    }
}