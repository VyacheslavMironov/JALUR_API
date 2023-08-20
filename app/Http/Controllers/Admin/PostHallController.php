<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Service\HallService;
use App\DTO\Hall\CreateHallDTO;
use App\DTO\Hall\DeleteHallDTO;
use App\DTO\Hall\UpdateHallDTO;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateHallRequest;
use App\Http\Requests\UpdateHallRequest;
use Illuminate\Http\Request;

class PostHallController extends Controller
{
    public function create(CreateHallRequest $request, HallService $service)
    {
        $request->validated();
        $service->CreateAction(
            new CreateHallDTO(
                $request['name']
            )
        );
        return redirect()->route('admin.halls')->with('success', 'Данные добавлены!');
    }

    public function update(UpdateHallRequest $request, HallService $service)
    {
        $request->validated();
        $service->UpdateAction(
            new UpdateHallDTO(
                $request['id'],
                $request['name']
            )
        );
        return redirect()->route('admin.halls')->with('success', 'Данные обновлены!');
    }

    public function delete(Request $request, HallService $service)
    {
        $service->DeleteAction(
            new DeleteHallDTO(
                $request->id
            )
        );
        return redirect()->route('admin.halls')->with('success', 'Данные удалены!');
    }
}
