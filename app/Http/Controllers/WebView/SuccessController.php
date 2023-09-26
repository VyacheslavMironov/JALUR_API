<?php

namespace App\Http\Controllers\WebView;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SuccessController extends Controller
{
    public function create_user()
    {
        return view('web_view.success.create_user');
    }
}
