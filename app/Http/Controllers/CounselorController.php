<?php

namespace App\Http\Controllers;
use App\Models\Message;
use Illuminate\Http\Request;
use App\Models\User;
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
    public function messages()
    {
        $counselor_id = auth()->user()->id;
        $messages = Message::where('counselor_id', $counselor_id)->get();
    
        return view('counselor.messages', compact('messages'));
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
