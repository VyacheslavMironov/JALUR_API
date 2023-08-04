<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\Service\HistoryWorkoutsService;
use App\Domain\Service\ValidateService;
use App\DTO\HistoryWorkouts\CreateHistoryWorkoutsDTO;
use App\DTO\HistoryWorkouts\ShowHistoryWorkoutsDTO;
use App\DTO\HistoryWorkouts\UpdateHistoryWorkoutsDTO;
use App\DTO\HistoryWorkouts\DeleteHistoryWorkoutsDTO;

class HistoryWorkoutsController extends Controller
{
    public function CreateAction(Request $request, HistoryWorkoutsService $service, ValidateService $validate)
    {
        $validate->HistoryWorkoutsValidateAction($request);
        return $service->CreateAction(
            new CreateHistoryWorkoutsDTO(
                $request->TypeWorkoutId,
                $request->WorkoutId,
                $request->UserId,
                $request->Active,
                $request->CountFreezingDay
            )
        );
    }

    public function ShowAction(int $history_workout_id, HistoryWorkoutsService $service)
    {
        return $service->ShowAction(
            new ShowHistoryWorkoutsDTO($history_workout_id)
        );
    }

    public function AllAction(HistoryWorkoutsService $service)
    {
        return $service->AllAction();
    }

    public function UpdateAction(Request $request, HistoryWorkoutsService $service, ValidateService $validate)
    {
        $validate->HistoryWorkoutsValidateAction($request);
        return $service->UpdateAction(
            new UpdateHistoryWorkoutsDTO(
                $request->Id,
                $request->TypeWorkoutId,
                $request->WorkoutId,
                $request->UserId,
                $request->Active,
                $request->CountFreezingDay
            )
        );
    }

    public function DeleteAction(int $history_workout_id, HistoryWorkoutsService $service)
    {
        return $service->DeleteAction(
            new DeleteHistoryWorkoutsDTO($history_workout_id)
        );
    }
}
