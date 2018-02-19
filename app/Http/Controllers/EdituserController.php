<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EdituserController extends Controller
{
    public function edit()
    {
        return view('auth.edit');
    }
}
