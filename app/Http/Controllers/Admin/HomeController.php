<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Service\ScheduleService;
use App\Domain\Service\UserService;
use App\Domain\Service\WorkoutService;
use App\DTO\Schedules\ShowScheduleDTO;
use App\DTO\Workouts\ShowWorkoutsDTO;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return redirect('admin/login');
    }
    public function login()
    {
        if (session()->get("id"))
        {
            return back();
        }
        return view('login');
    }
    public function schedules(ScheduleService $service, WorkoutService $workoutService, User $userService)
    {
        if (session()->get("id"))
        {
            $arr = array();
            foreach ($service->AllAction() as $item)
            {
                array_push($arr, [
                    'Id' => $item->id,
                    'Name' => $workoutService->ShowAction(new ShowWorkoutsDTO($item->WorkoutId)),
                    'Couch' => $userService::find($item->Couch),
                    'WeekDay' => $item->WeekDay,
                    'StartTime' => $item->StartTime,
                    'EndTime' => $item->EndTime
                ]);
            }
            return view('schedules', [
                "schedules" => $arr
            ]);
        }
        return redirect()->route('admin.login');
    }

    public function schedules_create(WorkoutService $workoutService, User $userService)
    {
        if (session()->get("id"))
        {
            return view('schedules_create', [
                'workout' => $workoutService->AllAction(),
                'couch' => $userService::get(),
                'schedule' => [],
                'schedule_id' => null,
                'form' => 'admin.query.schedules.create'
            ]);
        }
        return redirect()->route('admin.login');
    }
    public function schedules_update(int $id, ScheduleService $service, WorkoutService $workoutService, User $userService)
    {
        if (session()->get("id"))
        {
            return view('schedules_create', [
                'workout' => $workoutService->AllAction(),
                'couch' => $userService::get(),
                'schedule' => $service->ShowAction(new ShowScheduleDTO($id)),
                'schedule_id' => $id,
                'form' => 'admin.query.schedules.update'
            ]);
        }
        return redirect()->route('admin.login');
    }

    public function history_note()
    {
        if (session()->get("id"))
        {
            return view('history_note');
        }
        return redirect()->route('admin.login');
    }

    public function history_note_search()
    {
        if (session()->get("id"))
        {
            return view('history_note_search');
        }
        return redirect()->route('admin.login');
    }

    public function training()
    {
        if (session()->get("id"))
        {
            return view('training');
        }
        return redirect()->route('admin.login');
    }

    public function training_type()
    {
        if (session()->get("id"))
        {
            return view('training_type');
        }
        return redirect()->route('admin.login');
    }

    public function training_create()
    {
        if (session()->get("id"))
        {
            return view('training_create');
        }
        return redirect()->route('admin.login');
    }

    public function users()
    {
        if (session()->get("id"))
        {
            return view('users');
        }
        return redirect()->route('admin.login');
    }

    public function users_update()
    {
        if (session()->get("id"))
        {
            return view('users_update');
        }
        return redirect()->route('admin.login');
    }

    public function history_sale()
    {
        if (session()->get("id"))
        {
            return view('history_sale');
        }
        return redirect()->route('admin.login');
    }

    public function user_couches()
    {
        if (session()->get("id"))
        {
            return view('user_couches');
        }
        return redirect()->route('admin.login');
    }
}
