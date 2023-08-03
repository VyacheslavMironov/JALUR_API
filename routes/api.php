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
            Route::post('delete', [TypeWorkoutsController::class, 'DeleteAction']);
        });
    });
});