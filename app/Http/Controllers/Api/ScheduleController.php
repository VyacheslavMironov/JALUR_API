<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\Service\ScheduleService;
use App\Domain\Service\ValidateService;
use App\DTO\Schedules\CreateScheduleDTO;
use App\DTO\Schedules\ShowScheduleDTO;
use App\DTO\Schedules\ShowDateScheduleDTO;
use App\DTO\Schedules\UpdateScheduleDTO;
use App\DTO\Schedules\DeleteScheduleDTO;
use App\Http\Requests\ScheduleCreateRequest;

class ScheduleController extends Controller
{
    public function CreateAction(ScheduleCreateRequest $request, ScheduleService $service, ValidateService $validate)
    {
        $request->validated();
        return $service->CreateAction(
            new CreateScheduleDTO(
                $request['hallId'],
                $request['workoutId'],
                $request['couch'],
                $request['dateWork'],
                $request['scheduleTimeId']
            )
        );
    }

    public function ShowAction(int $schedule_id, ScheduleService $service)
    {
        return $service->ShowAction(
            new ShowScheduleDTO($schedule_id)
        );
    }

    public function ShowDateAction(int $hall, string $date, ScheduleService $service)
    {
        return $service->ShowDateAction(
            new ShowDateScheduleDTO($date, $hall)
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
                $request->HallId,
                $request->WorkoutId,
                $request->Couch,
                $request->DateWork,
                $request->ScheduleTimeId
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
