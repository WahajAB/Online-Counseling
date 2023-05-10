<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class callcontroller extends Controller
{
    public function index()
    {
        return view('calling.welcome');
    }
}
