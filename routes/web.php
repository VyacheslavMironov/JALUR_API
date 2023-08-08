<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;

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
    Route::get('/users/update', [HomeController::class, 'users_update'])
        ->name('admin.users.update');
    Route::get('/history/sale', [HomeController::class, 'history_sale'])
        ->name('admin.history.sale');
    Route::get('/users/couch', [HomeController::class, 'user_couches'])
        ->name('admin.users.couch');
});
