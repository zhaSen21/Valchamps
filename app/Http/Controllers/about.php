<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contact extends Controller
{
    public function index()
    {
        return view('layouts.frontend.about');
    }
}
