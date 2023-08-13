<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Service\ScheduleTimeService;
use App\DTO\ScheduleTime\CreateScheduleTimeDTO;
use App\DTO\ScheduleTime\DeleteScheduleTimeDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateScheduleTimeRequest;
use Illuminate\Http\Request;

class PostScheduleTimeController extends Controller
{
    public function create(CreateScheduleTimeRequest $request, ScheduleTimeService $service)
    {
        $request->validated();
        $service->CreateAction(
            new CreateScheduleTimeDTO($request['startTime'])
        );
        return back();
    }

    public function delete(Request $request, ScheduleTimeService $service)
    {
        $service->DeleteAction(
            new DeleteScheduleTimeDTO($request->Id)
        );
        return back();
    }
}
