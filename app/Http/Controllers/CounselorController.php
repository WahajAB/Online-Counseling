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


    public function replyUser($id)
    {
        $user = User::findOrFail($id);
        return view('reply_to_user', compact('user'));
    }
    public function replyUsers(Request $request, $id)
    {
        $message = new Message;
        $message->user_id = auth()->user()->id;
        $message->counselor_id = $id;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->save();
        return redirect()->back()->with('status', 'Message sent successfully');
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
