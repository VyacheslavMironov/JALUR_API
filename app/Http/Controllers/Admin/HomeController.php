<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return redirect('admin/login');
    }
    public function login()
    {
        return view('login');
    }
    public function schedules()
    {
        return view('schedules');
    }

    public function schedules_create()
    {
        return view('schedules_create');
    }

    public function history_note()
    {
        return view('history_note');
    }

    public function history_note_search()
    {
        return view('history_note_search');
    }

    public function training()
    {
        return view('training');
    }

    public function training_type()
    {
        return view('training_type');
    }

    public function training_create()
    {
        return view('training_create');
    }

    public function users()
    {
        return view('users');
    }

    public function users_update()
    {
        return view('users_update');
    }

    public function history_sale()
    {
        return view('history_sale');
    }

    public function user_couches()
    {
        return view('user_couches');
    }
}
