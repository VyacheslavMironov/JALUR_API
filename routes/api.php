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
use App\Http\Controllers\Api\RecordController;


Route::prefix('user')->group(function () {
    Route::post('create', [UserController::class, 'CreateAction']);
    Route::post('auth', [UserController::class, 'AuthAction']);
    Route::post('code', [UserController::class, 'CodeAction']);
    // Запросы с Bearer токеном
    Route::middleware('auth:sanctum')->group(function (){
        Route::get('logout', [UserController::class, 'LogoutAction']);
    });
});

Route::prefix('type')->group(function () {
    Route::prefix('workouts')->group(function () {
        Route::get('show/{tpe_work_id}', [TypeWorkoutsController::class, 'ShowAction']);
        Route::get('all', [TypeWorkoutsController::class, 'AllAction']);
        // Запросы с Bearer токеном
        Route::middleware('auth:sanctum')->group(function (){
            Route::post('create', [TypeWorkoutsController::class, 'CreateAction']);
            Route::get('delete{tpe_work_id}', [TypeWorkoutsController::class, 'DeleteAction']);
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