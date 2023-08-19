<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PostProfileController;
use App\Http\Controllers\Admin\PostSchedulesController;
use App\Http\Controllers\Admin\PostScheduleTimeController;
use App\Http\Controllers\Admin\PostUserController;
use App\Http\Controllers\Admin\PostTypeWorkoutController;
use App\Http\Controllers\Admin\PostWorkoutController;
use App\Http\Controllers\Api\HallController;

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

    // Расписание
    Route::prefix('schedules')->group(function () {
        //
        Route::get('/create', [HomeController::class, 'schedules_create'])
            ->name('admin.schedules.create');
        Route::get('/update/{id}', [HomeController::class, 'schedules_update'])
            ->name('admin.schedules.update');

        // Создание расписания
        Route::post('/create', [PostSchedulesController::class, 'create'])
            ->name('admin.query.schedules.create');
        Route::post('/update', [PostSchedulesController::class, 'update'])
            ->name('admin.query.schedules.update');
        Route::get('/delete/{id}', [PostSchedulesController::class, 'delete'])
            ->name('admin.query.schedules.delete');

        // Время расписания
        Route::prefix('time')->group(function () {
            // Создание времени для расписания
            Route::get('/', [HomeController::class, 'schedules_time'])
                ->name('admin.schedules.time');
            // Запросы для времени расписания
            Route::post('/create', [PostScheduleTimeController::class, 'create'])
                ->name('admin.query.schedule.time.create');
            Route::post('/delete', [PostScheduleTimeController::class, 'delete'])
                ->name('admin.query.schedule.time.delete');
        });
        //
        Route::get('/{hallId}/{month}/{year}', [HomeController::class, 'schedules'])
            ->name('admin.schedules');
        Route::get('/for/{hallId}/{day}/{month}/{year}', [HomeController::class, 'schedules_for_day'])
            ->name('admin.schedules_for_day');
    });
    
    // История
    Route::prefix('history')->group(function () {
        Route::get('/sale', [HomeController::class, 'history_sale'])
            ->name('admin.history.sale');

        Route::prefix('note')->group(function () {
            Route::get('/', [HomeController::class, 'history_note'])
                ->name('admin.history.note');
            Route::get('/search', [HomeController::class, 'history_note_search'])
                ->name('admin.history.note.search');
        });
    });
    
    // Тренировки
    Route::prefix('training')->group(function () {
        Route::get('/', [HomeController::class, 'training'])
            ->name('admin.training');
        Route::get('/create', [HomeController::class, 'training_create'])
            ->name('admin.training.create');

        Route::prefix('type')->group(function () {
            Route::get('/', [HomeController::class, 'training_type'])
                ->name('admin.training.type');

            // Удаление типа тренировки
            Route::get('/workout/delete/{id}', [PostTypeWorkoutController::class, 'delete'])
                ->name('admin.query.type.workout.delete');
            Route::post('/workout/create', [PostTypeWorkoutController::class, 'create'])
                ->name('admin.query.type.workout.create');
        });

        // Запросы для тренировок
        Route::prefix('workout')->group(function () {
            Route::get('/delete/{id}', [PostWorkoutController::class, 'delete'])
            ->name('admin.query.workout.delete');
        Route::post('/create', [PostWorkoutController::class, 'create'])
            ->name('admin.query.workout.create');
        });
    });

    // Пользователи
    Route::prefix('users')->group(function () {
        Route::get('/', [HomeController::class, 'users'])
            ->name('admin.users');
        Route::get('/update/{id}', [HomeController::class, 'users_update'])
            ->name('admin.users.update');
        
        Route::get('/couch', [HomeController::class, 'user_couches'])
            ->name('admin.users.couch');

        // Авторизация в админке
        Route::post('/auth', [PostProfileController::class, 'auth'])
            ->name('admin.users.auth');
        Route::post('/logout', [PostProfileController::class, 'logout'])
            ->name('admin.users.logout');

        // Обновление пользователя
        Route::post('/update', [PostUserController::class, 'update'])
            ->name('admin.query.users.update');
    });

    // Залы
    Route::prefix('hall')->group(function () {
        Route::get('/', [HomeController::class, 'hall'])
            ->name('admin.halls');
        Route::get('/show/{id}', [HomeController::class, 'hall_show'])
            ->name('admin.hall');
        
            Route::prefix('schedules')->group(function () {
                Route::get('/', [HomeController::class, 'hall_shadule'])
                    ->name('admin.hall_shadules');
            });

        // Запросы
        Route::post('/create', [HallController::class, 'create'])
            ->name('admin.query.create');
        Route::post('/update', [HallController::class, 'update'])
            ->name('admin.query.update');
        Route::post('/delete', [HallController::class, 'delete'])
            ->name('admin.query.delete');
    });
});

