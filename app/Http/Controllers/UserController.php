<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Message;
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
    public function messages()
    {
        $user_id = auth()->user()->id;
        $messages = Message::where('counselor_id', $user_id)->get();
    
        return view('user.messages', compact('messages'));
    }
    public function messageCounselor($id)
    {
        $counselor = User::findOrFail($id);
        return view('message_counselor', compact('counselor'));
    }
    public function messageCounselors(Request $request, $id)
    {
        
        $message = new Message;
        $message->user_id = auth()->user()->id;
        $message->counselor_id = $id;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();
    
        return redirect()->back()->with('status', 'Message sent successfully');
    }
    public function callCounselor($id)
    {
        $counselor = User::findOrFail($id);

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
