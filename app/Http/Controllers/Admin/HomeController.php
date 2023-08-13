<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Service\RecordsService;
use App\Domain\Service\ScheduleService;
use App\Domain\Service\TypeWorkoutsService;
use App\Domain\Service\UserService;
use App\Domain\Service\WorkoutService;
use App\DTO\Schedules\ShowScheduleDTO;
use App\DTO\TypeWorkouts\ShowTypeWorkoutsDTO;
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
        return view('login', ["title" => "Расписание"]);
    }
    public function schedules(ScheduleService $service, WorkoutService $workoutService, User $userService)
    {
        if (session()->get("id"))
        {
            $arr = array();
            foreach ($service->AllAction() as $item)
            {
                array_push($arr, [
                    // 'Id' => $item->id,
                    // 'Name' => $workoutService->ShowAction(new ShowWorkoutsDTO($item->WorkoutId)),
                    // 'Couch' => $userService::find($item->Couch),
                    // 'WeekDay' => $item->WeekDay,
                    // 'Active' => $item->Active,
                    // 'ScheduleTimeId' => $item->ScheduleTimeId
                ]);
            }
            return view('schedules', [
                "schedules" => $arr,
                "title" => "Расписание"
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
                'form' => 'admin.query.schedules.create',
                "title" => "Расписание"
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
                'form' => 'admin.query.schedules.update',
                "title" => "Расписание"
            ]);
        }
        return redirect()->route('admin.login');
    }

    public function history_note(RecordsService $service, UserService $userService, WorkoutService $workoutService,
                                 ScheduleService $scheduleService, TypeWorkoutsService $typeWorkoutsService)
    {
        if (session()->get("id"))
        {
            $arr = array();
            foreach($service->AllAction() as $el)
            {
                $user = $userService->ShowAction($el->UserId);
                $schedule = $scheduleService->ShowAction(
                    new ShowScheduleDTO($el->ScheduleId)
                );
                $workout = $workoutService->ShowAction(
                    new ShowWorkoutsDTO($schedule->WorkoutId)
                );
                $typeWorkout = $typeWorkoutsService->ShowAction(
                    new ShowTypeWorkoutsDTO($workout->TypeWorkoutId)
                );
                $couch = $userService->ShowAction($schedule->Couch);

                $item = [
                    'first_name' => $user->FirstName,
                    'last_name' => $user->LastName,
                    'phone' => $user->Phone,
                    'schedule' => $workout->Name,
                    'schedule_type' => $typeWorkout->Name,
                    'couch' => $couch->FirstName .' '. $couch->LastName,
                    'week_day' => $schedule->WeekDay,
                    'start_time' => $schedule->StartTime,
                ];
                array_push($arr, $item);
            }
            return view('history_note', [
                'recodrs' => $arr,
                "title" => "История записей"
            ]);
        }
        return redirect()->route('admin.login');
    }

    public function history_note_search()
    {
        if (session()->get("id"))
        {
            return view('history_note_search', [
                "title" => "История записей"
            ]);
        }
        return redirect()->route('admin.login');
    }

    public function training(WorkoutService $service)
    {
        if (session()->get("id"))
        {
            return view('training', [
                'workouts' => $service->AllAction(),
                "title" => "Занятия"
            ]);
        }
        return redirect()->route('admin.login');
    }

    public function training_type(TypeWorkoutsService $service)
    {
        if (session()->get("id"))
        {
            return view('training_type', [
                'type_workout' => $service->AllAction(),
                "title" => "Занятия"
            ]);
        }
        return redirect()->route('admin.login');
    }

    public function training_create(UserService $service, TypeWorkoutsService $typeWorkoutervice)
    {
        if (session()->get("id"))
        {
            return view('training_create', [
                'workout' => $service->AllTypeAction('Тренер'),
                'type_workout' => $typeWorkoutervice->AllAction(),
                "title" => "Занятия"
            ]);
        }
        return redirect()->route('admin.login');
    }

    public function users(UserService $service)
    {
        if (session()->get("id"))
        {

            return view('users', [
                'users' => $service->AllTypeAction('Клиент'),
                "title" => "Пользователи"
            ]);
        }
        return redirect()->route('admin.login');
    }

    public function users_update(int $id, UserService $service)
    {
        if (session()->get("id"))
        {

            return view('users_update',[
                'user' => $service->ShowAction($id),
                "title" => "Пользователи"
            ]);
        }
        return redirect()->route('admin.login');
    }

    public function history_sale()
    {
        if (session()->get("id"))
        {
            return view('history_sale', [
                "title" => "История покупок"
            ]);
        }
        return redirect()->route('admin.login');
    }

    public function user_couches(UserService $service)
    {
        if (session()->get("id"))
        {
            return view('user_couches', [
                'users' => $service->AllTypeAction('Тренер'),
                "title" => "Тренера"
            ]);
        }
        return redirect()->route('admin.login');
    }
}
