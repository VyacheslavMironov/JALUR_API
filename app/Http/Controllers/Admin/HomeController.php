<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Service\RecordsService;
use App\Domain\Service\ScheduleService;
use App\Domain\Service\ScheduleTimeService;
use App\Domain\Service\TypeWorkoutsService;
use App\Domain\Service\UserService;
use App\Domain\Service\WorkoutService;
use App\Domain\Service\HallService;
use App\DTO\Schedules\ShowScheduleDTO;
use App\DTO\TypeWorkouts\ShowTypeWorkoutsDTO;
use App\DTO\Workouts\ShowWorkoutsDTO;
use App\DTO\Hall\ShowHallDTO;
use App\DTO\Schedules\ShowDateScheduleDTO;
use App\DTO\Schedules\ShowHallScheduleDTO;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use ErrorException;
use Exception;
use Illuminate\Http\Request;
use TypeError;

use function PHPUnit\Framework\isNull;

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

    public function hall_shadule(HallService $service)
    {
        if (session()->get("id"))
        {
            return view('hall_schedules', [
                'halls' => $service->AllAction(),
                "title" => "Расписание",
                "month" => Carbon::now()->month,
                "year" => Carbon::now()->year
            ]);
        }
        return redirect()->route('admin.login');
    }

    public function schedules(int $hallId, int $month, int $year, ScheduleService $service, WorkoutService $workoutService, User $userService, ScheduleTimeService $scheduleTimeService)
    {
        $s=0;
        
        if (session()->get("id"))
        {
            $calendar = [
                array(),
                array(),
                array(),
                array(),
                array(),
                array(),
            ];
            $currentDate = Carbon::now();
            // Количество дней в текущем месяце
            $numberOfDays = $currentDate->daysInMonth;

            for ($day = 1; $day <= $numberOfDays; $day++) {
                $date = Carbon::createFromDate(
                    $year, 
                    $month, 
                    $day
                );
                $i = (int)Carbon::parse($date)->weekOfMonth - 1;
                if ($date->day == 1)
                {
                    
                    if ($date->isTuesday() && $s == 0)
                    {
                        array_push($calendar[0], []);
                    }
                    if ($date->isWednesday() && $s == 0)
                    {
                        array_push($calendar[0], []);
                        array_push($calendar[0], []);
                    }
                    if ($date->isThursday() && $s == 0)
                    {
                        array_push($calendar[0], []);
                        array_push($calendar[0], []);
                        array_push($calendar[0], []);
                    }
                    if ($date->isFriday() && $s == 0)
                    {
                        array_push($calendar[0], []);
                        array_push($calendar[0], []);
                        array_push($calendar[0], []);
                        array_push($calendar[0], []);
                    }
                    if ($date->isSaturday() && $s == 0)
                    {
                        array_push($calendar[0], []);
                        array_push($calendar[0], []);
                        array_push($calendar[0], []);
                        array_push($calendar[0], []);
                        array_push($calendar[0], []);
                    }
                    if ($date->isSunday() && $s == 0)
                    {
                        array_push($calendar[0], []);
                        array_push($calendar[0], []);
                        array_push($calendar[0], []);
                        array_push($calendar[0], []);
                        array_push($calendar[0], []);
                        array_push($calendar[0], []);
                    }
                    
                    if ($date->month == $month)
                    {
                        array_push($calendar[0], [
                            'Day' => $date->day,
                            'Date' => $date->toDateString(),
                        ]);
                    }
                    
                    $s = 1;
                }
                else
                {
                    if (count($calendar[$i]) == 7 && $date->day != 1)
                    {
                        $i += 1;
                    }
                    try
                    {
                        if ($date->month == $month)
                        {
                            array_push($calendar[$i], [
                                'Day' => $date->day,
                                'Date' => $date->toDateString(),
                            ]);
                        }
                    } catch(TypeError)
                    {}
                    
                }
            }
            while (count($calendar[4]) < 7)
            {
                array_push($calendar[4], []);
            }
            while (count($calendar[5]) < 7)
            {
                array_push($calendar[5], []);
            }

            foreach ($calendar as &$week)
            {
                foreach ($week as &$day)
                {
                    if (count($day) > 0)
                    {
                        $day['ValueWork'] = $service->ShowByDateAction(
                            new ShowDateScheduleDTO(
                                $day["Date"]
                            )
                        );
                    }
                }
            }

            $monthName = 'Неопознано';
            if ($month == 1) $monthName = 'Январь';
            if ($month == 2) $monthName = 'Февраль';
            if ($month == 3) $monthName = 'Март';
            if ($month == 4) $monthName = 'Апрель';
            if ($month == 5) $monthName = 'Май';
            if ($month == 6) $monthName = 'Июнь';
            if ($month == 7) $monthName = 'Июль';
            if ($month == 8) $monthName = 'Август';
            if ($month == 9) $monthName = 'Сентябрь';
            if ($month == 10) $monthName = 'Октябрь';
            if ($month == 11) $monthName = 'Ноябрь';
            if ($month == 12) $monthName = 'Декабрь';

            $yearUp = null;
            $yearDown = null;
            $monthUp = null;
            $monthDown = null;
            if ($month == 12)
            {
                $monthUp = 1;
                $yearUp = $year + 1;
            }


            if ($month == 1)
            {
                $monthDown = 12;
                $yearDown = $year - 1;
            }
            return view('schedules', [
                "calendar" => $calendar,
                "title" => "Расписание",
                "monthName" => $monthName,
                "year" => $year,
                "yearUp" => $yearUp ? $yearUp : $year,
                "yearDown" => $yearDown ? $yearDown : $year,
                "month" => $month,
                "monthUp" => $monthUp ? $monthUp : $month + 1,
                "monthDown" => $monthDown ? $monthDown : $month -1,
                "hallId" => $hallId
            ]);
        }
        return redirect()->route('admin.login');
    }

    public function schedules_for_day(int $hallId, int $day, int $month, int $year, ScheduleService $service)
    {
        if (session()->get("id"))
        {
            $date = Carbon::createFromDate(
                $year, 
                $month, 
                $day
            );
            $arr = array();

            foreach ($service->ShowByDateAction(new ShowDateScheduleDTO($date->toDateString())) as $row)
            {
                if ($hallId == $row->HallId)
                {
                    array_push(
                        $arr,
                        $row
                    );
                }
            }

            return view('schedules_for_day', [
                "schedule" => $arr,
                "title" => "Расписание"
            ]);
        }
        return redirect()->route('admin.login');
    }

    public function schedules_create(HallService $hallService, WorkoutService $workoutService, User $userService, ScheduleTimeService $scheduleTimeService)
    {
        if (session()->get("id"))
        {
            return view('schedules_create', [
                'hall' => $hallService->AllAction(),
                'workout' => $workoutService->AllAction(),
                'couch' => $userService::get(),
                'schedule' => [],
                'schedule_time' => $scheduleTimeService->AllAction(),
                'schedule_id' => null,
                'form' => 'admin.query.schedules.create',
                "title" => "Расписание"
            ]);
        }
        return redirect()->route('admin.login');
    }
    public function schedules_update(int $id, HallService $hallService, ScheduleService $service, WorkoutService $workoutService, User $userService)
    {
        if (session()->get("id"))
        {
            return view('schedules_create', [
                'hall' => $hallService->AllAction(),
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

    public function schedules_time(ScheduleTimeService $service)
    {
        if (session()->get("id"))
        {
            return view('schedules_time', [
                'schedule_times' => $service->AllAction(),
                "title" => "Расписание время"
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

    public function hall(HallService $service)
    {
        return view('hall', [
            'halls' => $service->AllAction(),
            'title' => "Залы"
        ]);
    }

    public function hall_show(int $id, HallService $service)
    {
        return view('hall_show', [
            'hall' => $service->ShowAction(
                new ShowHallDTO(
                    $id
                )
            ),
            'title' => "Залы"
        ]);
    }
}
