<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\TypeWorkoutsController;
use App\Http\Controllers\Api\WorkoutsController;
use App\Http\Controllers\Api\ScheduleController;
use App\Http\Controllers\Api\ScheduleTimeController;
use App\Http\Controllers\Api\HallController;
use App\Http\Controllers\Api\RecordController;
use App\Http\Controllers\Api\HistoryWorkoutsController;


Route::prefix('user')->group(function () {
    Route::post('create', [UserController::class, 'CreateAction']);
    Route::post('auth', [UserController::class, 'AuthAction']);
    Route::post('code', [UserController::class, 'CodeAction']);
    // Запросы с Bearer токеном
    Route::middleware('auth:sanctum')->group(function (){
        Route::get('logout/{user_id}', [UserController::class, 'LogoutAction']);
    });
    
});

Route::prefix('type')->group(function () {
    Route::prefix('workouts')->group(function () {
        Route::get('show/{tpe_work_id}', [TypeWorkoutsController::class, 'ShowAction']);
        Route::get('all', [TypeWorkoutsController::class, 'AllAction']);
        // Запросы с Bearer токеном
        Route::middleware('auth:sanctum')->group(function (){
            Route::post('create', [TypeWorkoutsController::class, 'CreateAction']);
            Route::get('delete/{tpe_work_id}', [TypeWorkoutsController::class, 'DeleteAction']);
        });
    });
});

Route::prefix('workouts')->group(function () {
    Route::get('show/{workout_id}', [WorkoutsController::class, 'ShowAction']);
    Route::get('all', [WorkoutsController::class, 'AllAction']);
    // Запросы с Bearer токеном
    Route::middleware('auth:sanctum')->group(function (){
        Route::post('create', [WorkoutsController::class, 'CreateAction']);
        Route::get('delete/{workout_id}', [WorkoutsController::class, 'DeleteAction']);
        Route::post('update', [WorkoutsController::class, 'UpdateAction']);
    });
});

Route::prefix('schedule')->group(function () {
    Route::get('show/{schedule_id}', [ScheduleController::class, 'ShowAction']);
    Route::get('all', [ScheduleController::class, 'AllAction']);
    // Запросы с Bearer токеном
    Route::middleware('auth:sanctum')->group(function (){
        Route::post('create', [ScheduleController::class, 'CreateAction']);
        Route::get('delete/{schedule_id}', [ScheduleController::class, 'DeleteAction']);
        Route::post('update', [ScheduleController::class, 'UpdateAction']);
    });
    // Залы
    Route::prefix('hall')->group(function () {
        Route::get('/', [HallController::class, 'all']); 
        Route::post('create', [HallController::class, 'create']); 
        Route::get('show/{id}', [HallController::class, 'show']); 
        Route::post('update', [HallController::class, 'update']); 
        Route::post('delete', [HallController::class, 'delete']); 
    });
    // Запросы к апи времени расписания
    Route::prefix('time')->group(function () {
        Route::post('show/{id}', [ScheduleTimeController::class, 'show']);
        Route::post('/', [ScheduleTimeController::class, 'all']);
        // Запросы с Bearer токеном
        Route::middleware('auth:sanctum')->group(function (){
            Route::post('create', [ScheduleTimeController::class, 'create']);
            Route::post('update', [ScheduleTimeController::class, 'update']);
            Route::post('delete/{id}', [ScheduleTimeController::class, 'delete']);
        });
    });
});

Route::prefix('record')->group(function () {
    Route::get('show/{record_id}', [RecordController::class, 'ShowAction']);
    Route::get('all', [RecordController::class, 'AllAction']);
    // Запросы с Bearer токеном
    Route::middleware('auth:sanctum')->group(function (){
        Route::post('create', [RecordController::class, 'CreateAction']);
        Route::get('delete/{record_id}', [RecordController::class, 'DeleteAction']);
        Route::post('update', [RecordController::class, 'UpdateAction']);
    });
});

Route::prefix('history')->group(function () {
    Route::prefix('workout')->group(function () {
        Route::get('show/{history_workout_id}', [HistoryWorkoutsController::class, 'ShowAction']);
        Route::get('all', [HistoryWorkoutsController::class, 'AllAction']);
        // Запросы с Bearer токеном
        Route::middleware('auth:sanctum')->group(function (){
            Route::post('create', [HistoryWorkoutsController::class, 'CreateAction']);
            Route::get('delete/{history_workout_id}', [HistoryWorkoutsController::class, 'DeleteAction']);
            Route::post('update', [HistoryWorkoutsController::class, 'UpdateAction']);
        });
    });
});
