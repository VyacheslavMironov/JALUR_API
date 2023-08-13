<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostProfileController;
use App\Http\Controllers\Admin\PostSchedulesController;
use App\Http\Controllers\Admin\PostScheduleTimeController;
use App\Http\Controllers\Admin\PostUserController;
use App\Http\Controllers\Admin\PostTypeWorkoutController;
use App\Http\Controllers\Admin\PostWorkoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'index'])
    ->name('admin.index');

Route::prefix('admin')->group(function () {
    Route::get('/login', [HomeController::class, 'login'])
        ->name('admin.login');
    Route::get('/schedules', [HomeController::class, 'schedules'])
        ->name('admin.schedules');
    Route::get('/schedules/create', [HomeController::class, 'schedules_create'])
        ->name('admin.schedules.create');
    Route::get('/schedules/update/{id}', [HomeController::class, 'schedules_update'])
        ->name('admin.schedules.update');
    Route::get('/history/note', [HomeController::class, 'history_note'])
        ->name('admin.history.note');
    Route::get('/history/note/search', [HomeController::class, 'history_note_search'])
        ->name('admin.history.note.search');
    Route::get('/training', [HomeController::class, 'training'])
        ->name('admin.training');
    Route::get('/training/type', [HomeController::class, 'training_type'])
        ->name('admin.training.type');
    Route::get('/training/create', [HomeController::class, 'training_create'])
        ->name('admin.training.create');
    Route::get('/users', [HomeController::class, 'users'])
        ->name('admin.users');
    Route::get('/users/update/{id}', [HomeController::class, 'users_update'])
        ->name('admin.users.update');
    Route::get('/history/sale', [HomeController::class, 'history_sale'])
        ->name('admin.history.sale');
    Route::get('/users/couch', [HomeController::class, 'user_couches'])
        ->name('admin.users.couch');

    // Авторизация в админке
    Route::post('/users/auth', [PostProfileController::class, 'auth'])
        ->name('admin.users.auth');
    Route::post('/users/logout', [PostProfileController::class, 'logout'])
        ->name('admin.users.logout');

        // Создание времени для расписания
    Route::get('/schedules/time', [HomeController::class, 'schedules_time'])
        ->name('admin.schedules.time');
    // Создание расписания
    Route::post('/schedules/create', [PostSchedulesController::class, 'create'])
        ->name('admin.query.schedules.create');
    Route::post('/schedules/update', [PostSchedulesController::class, 'update'])
        ->name('admin.query.schedules.update');
    Route::get('/schedules/delete/{id}', [PostSchedulesController::class, 'delete'])
        ->name('admin.query.schedules.delete');

    // Обновление пользователя
    Route::post('/users/update', [PostUserController::class, 'update'])
        ->name('admin.query.users.update');

    // Удаление типа тренировки
    Route::get('/type/workout/delete/{id}', [PostTypeWorkoutController::class, 'delete'])
        ->name('admin.query.type.workout.delete');
    Route::post('/type/workout/create', [PostTypeWorkoutController::class, 'create'])
        ->name('admin.query.type.workout.create');

    // Запросы для тренировок
    Route::get('/workout/delete/{id}', [PostWorkoutController::class, 'delete'])
        ->name('admin.query.workout.delete');
    Route::post('/workout/create', [PostWorkoutController::class, 'create'])
        ->name('admin.query.workout.create');

    // Запросы для времени расписания
    Route::post('/schedule/time/create', [PostScheduleTimeController::class, 'create'])
        ->name('admin.query.schedule.time.create');
    Route::post('/schedule/time/delete', [PostScheduleTimeController::class, 'delete'])
        ->name('admin.query.schedule.time.delete');
});

