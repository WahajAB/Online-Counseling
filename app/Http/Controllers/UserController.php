<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('CheckRole:0');
    }
    public function messageCounselor($id)
    {
    $counselor = User::findOrFail($id);
    // Add your logic for messaging the counselor here
    // ...
    return view('message_counselor', compact('counselor'));
    }

    public function callCounselor($id)
    {
    $counselor = User::findOrFail($id);
    // Add your logic for calling the counselor here
    // ...
    return view('call_counselor', compact('counselor'));
    }
    public function showCounselors()
    {
        $counselors = User::where('role', 1)->get();
        return view('User.index', compact('counselors'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('User.index');
    }
}
