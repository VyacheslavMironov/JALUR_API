<?php

namespace App\Http\Controllers\Api;

use App\Domain\Service\HallService;
use App\DTO\Hall\CreateHallDTO;
use App\DTO\Hall\DeleteHallDTO;
use App\DTO\Hall\ShowHallDTO;
use App\DTO\Hall\UpdateHallDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateHallRequest;
use App\Http\Requests\UpdateHallRequest;
use Illuminate\Http\Request;

class HallController extends Controller
{
    public function create(CreateHallRequest $request, HallService $service)
    {
        $request->validated();
        return $service->CreateAction(
            new CreateHallDTO(
                $request['name']
            )
        );
    }

    public function show(Request $request, HallService $service)
    {
        return $service->ShowAction(
            new ShowHallDTO(
                $request->id
            )
        );
    }

    public function all(HallService $service)
    {
        return $service->AllAction();
    }

    public function update(UpdateHallRequest $request, HallService $service)
    {
        $request->validated();
        return $service->UpdateAction(
            new UpdateHallDTO(
                $request['id'],
                $request['name']
            )
        );
    }

    public function delete(Request $request, HallService $service)
    {
        return $service->DeleteAction(
            new DeleteHallDTO(
                $request->id
            )
        );
    }
}
