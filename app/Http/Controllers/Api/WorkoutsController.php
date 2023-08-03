<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\Service\WorkoutService;
use App\Domain\Service\ValidateService;
use App\DTO\Workouts\CreateWorkoutsDTO;
use App\DTO\Workouts\ShowWorkoutsDTO;
use App\DTO\Workouts\DeleteWorkoutsDTO;
use App\DTO\Workouts\UpdateWorkoutsDTO;

class WorkoutsController extends Controller
{
    public function CreateAction(Request $request, WorkoutService $service, ValidateService $validate)
    {
        $validate->WorkoutsValidateAction($request);
        return $service->CreateAction(
            new CreateWorkoutsDTO(
                $request->TypeWorkoutId,
                $request->Name,
                $request->Image,
                $request->Description
            )
        );
    }
    
    public function ShowAction(int $workout_id, WorkoutService $service)
    {
        return $service->ShowAction(
            new ShowWorkoutsDTO($workout_id)
        );
    }

    public function AllAction(WorkoutService $service)
    {
        return $service->AllAction();
    }

    public function DeleteAction(int $workout_id, WorkoutService $service)
    {
        return $service->DeleteAction(
            new DeleteWorkoutsDTO($workout_id)
        );
    }

    public function UpdateAction(Request $request, WorkoutService $service, ValidateService $validate)
    {
        $validate->WorkoutsValidateAction($request);
        return $service->UpdateAction(
            new UpdateWorkoutsDTO(
                $request->id,
                $request->TypeWorkoutId,
                $request->Name,
                $request->Image,
                $request->Description
            )
        );
    }
}
