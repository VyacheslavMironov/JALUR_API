<?php

namespace App\Http\Controllers\Admin;

use App\Domain\Service\HistoryWorkoutsService;
use App\Domain\Service\RecordsService;
use App\Domain\Service\ScheduleService;
use App\Domain\Service\TypeWorkoutsService;
use App\Domain\Service\UserService;
use App\Domain\Service\WorkoutService;
use App\DTO\HistoryWorkouts\FilterHistoryWorkoutDTO;
use App\DTO\Schedules\ShowScheduleDTO;
use App\DTO\TypeWorkouts\ShowTypeWorkoutsDTO;
use App\DTO\Workouts\ShowWorkoutsDTO;
use App\Http\Controllers\Controller;
use App\Models\HistoryWorkouts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostSearchHistoryNodeController extends Controller
{
    public function filter(Request $request, HistoryWorkoutsService $service, UserService $userService, WorkoutService $workoutService,
                           ScheduleService $scheduleService, TypeWorkoutsService $typeWorkoutsService)
    {
        $data = $service->FilterAction(
            new FilterHistoryWorkoutDTO(
                $request->FirstName ? $request->FirstName : null,
                $request->LastName ? $request->LastName : null,
                $request->Phone ? $request->Phone : null,
                $request->Couch ? $request->Couch : null,
                $request->WeekDay ? $request->WeekDay : null,
                $request->WorkoutId ? $request->WorkoutId : null,
            )
        );
        $arr = array();
        foreach($data as $el)
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
            'recodrs' => $arr
        ]);
    }
}
