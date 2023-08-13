<?php

namespace App\Http\Controllers\Api;

use App\Domain\Service\ScheduleTimeService;
use App\DTO\ScheduleTime\CreateScheduleTimeDTO;
use App\DTO\ScheduleTime\DeleteScheduleTimeDTO;
use App\DTO\ScheduleTime\ShowScheduleTimeDTO;
use App\DTO\ScheduleTime\UpdateScheduleTimeDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateScheduleTimeRequest;
use App\Http\Requests\UpdateScheduleTimeRequest;
use Illuminate\Http\Request;

class ScheduleTimeController extends Controller
{
    public function create(CreateScheduleTimeRequest $request, ScheduleTimeService $service)
    {
        $request->validated();
        return $service->CreateAction(
            new CreateScheduleTimeDTO(
                $request['startTime']
            )
        );
    }

    public function show(int $id, ScheduleTimeService $service)
    {
        return $service->ShowAction(
            new ShowScheduleTimeDTO($id)
        );
    }

    public function all(ScheduleTimeService $service)
    {
        return $service->AllAction();
    }

    public function update(UpdateScheduleTimeRequest $request, ScheduleTimeService $service)
    {
        $request->validated();
        return $service->UpdateAction(
            new UpdateScheduleTimeDTO(
                $request['Id'],
                $request['startTime']
            )
        );
    }

    public function delete(int $id, ScheduleTimeService $service)
    {
        return $service->DeleteAction(
            new DeleteScheduleTimeDTO($id)
        );
    }
}
