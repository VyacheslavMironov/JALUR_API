<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Domain\Service\TypeWorkoutsService;
use App\Domain\Service\ValidateService;
use App\DTO\TypeWorkouts\CreateTypeWorkoutsDTO;
use App\DTO\TypeWorkouts\ShowTypeWorkoutsDTO;
use App\DTO\TypeWorkouts\DeleteTypeWorkoutsDTO;

class TypeWorkoutsController extends Controller
{
    public function CreateAction(Request $request, TypeWorkoutsService $service, ValidateService $validate)
    {
        return $service->CreateAction(
            new CreateTypeWorkoutsDTO($request->Name)
        );
    }

    public function ShowAction(int $type_work_id, TypeWorkoutsService $service)
    {
        return $service->ShowAction(
            new ShowTypeWorkoutsDTO($type_work_id)
        );
    }

    public function AllAction(TypeWorkoutsService $service)
    {
        return $service->AllAction();
    }

    public function DeleteAction(int $type_work_id, TypeWorkoutsService $service)
    {
        return $service->DeleteAction(
            new DeleteTypeWorkoutsDTO($type_work_id)
        );
    }
}
