<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Service\TypeWorkoutsService;
use App\DTO\TypeWorkouts\CreateTypeWorkoutsDTO;
use App\DTO\TypeWorkouts\DeleteTypeWorkoutsDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTypeWorkoutRequest;
use Illuminate\Http\Request;

class PostTypeWorkoutController extends Controller
{
    public function create(CreateTypeWorkoutRequest $request, TypeWorkoutsService $service)
    {
        $context = $request->validated();
        $service->CreateAction(
            new CreateTypeWorkoutsDTO($context['name'])
        );
        return back();
    }
    public function delete(int $id, TypeWorkoutsService $service)
    {
        $service->DeleteAction(
            new DeleteTypeWorkoutsDTO($id)
        );
        return back();
    }
}
