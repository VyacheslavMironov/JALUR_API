<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\Service\ScheduleService;
use App\Domain\Service\ValidateService;
use App\DTO\Schedules\CreateScheduleDTO;
use App\DTO\Schedules\ShowScheduleDTO;
use App\DTO\Schedules\UpdateScheduleDTO;
use App\DTO\Schedules\DeleteScheduleDTO;

class ScheduleController extends Controller
{
    public function CreateAction(Request $request, ScheduleService $service, ValidateService $validate)
    {
//        $validate->ScheduleValidateAction($request);
        return $service->CreateAction(
            new CreateScheduleDTO(
                $request->WorkoutId,
                $request->Couch,
                $request->WeekDay,
                $request->StartDate,
                $request->StartTime,
                $request->EndTime
            )
        );
    }

    public function ShowAction(int $schedule_id, ScheduleService $service)
    {
        return $service->ShowAction(
            new ShowScheduleDTO($schedule_id)
        );
    }

    public function AllAction(ScheduleService $service)
    {
        return $service->AllAction();
    }

    public function UpdateAction(Request $request, ScheduleService $service, ValidateService $validate)
    {
        $validate->ScheduleValidateAction($request);
        return $service->UpdateAction(
            new UpdateScheduleDTO(
                $request->Id,
                $request->WorkoutId,
                $request->Couch,
                $request->WeekDay,
                $request->StartDate,
                $request->StartTime,
                $request->EndTime
            )
        );
    }

    public function DeleteAction(int $schedule_id, ScheduleService $service)
    {
        return $service->DeleteAction(
            new DeleteScheduleDTO($schedule_id)
        );
    }
}
