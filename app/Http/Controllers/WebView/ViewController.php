<?php

namespace App\Http\Controllers\WebView;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        return view('web_view.index');
    }

    public function create_user()
    {
        return view('web_view.create_user');
    }

    public function login()
    {
        return view('web_view.login');
    }
}
