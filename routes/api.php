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


Route::prefix('user')->group(function () {
    Route::post('create', [UserController::class, 'CreateAction']);
    Route::post('auth', [UserController::class, 'AuthAction']);
    Route::post('code', [UserController::class, 'CodeAction']);
    // Запросы с Bearer токеном
    Route::middleware('auth:sanctum')->group(function (){
        Route::get('logout', [UserController::class, 'LogoutAction']);
    });
});