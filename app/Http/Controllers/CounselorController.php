<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CounselorController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('CheckRole:1');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Counselor.index');
    }
}
