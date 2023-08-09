<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Service\WorkoutService;
use App\DTO\Workouts\CreateWorkoutsDTO;
use App\DTO\Workouts\DeleteWorkoutsDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTypeWorkoutRequest;
use App\Http\Requests\CreateWorkoutRequest;
use Illuminate\Http\Request;

class PostWorkoutController extends Controller
{
    public function create(Request $image, CreateWorkoutRequest $request, WorkoutService $service)
    {
        $context = $request->validated();
        $service->CreateAction(
            new CreateWorkoutsDTO(
                $context['type_workout_id'],
                $context['name'],
                $image->file('image')
                    ->store('uploads', 'public'),
                $context['description']
            )
        );
        return back();
    }
    public function delete(int $id, WorkoutService $service)
    {
        $service->DeleteAction(
            new DeleteWorkoutsDTO($id)
        );
        return back();
    }
}
