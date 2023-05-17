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
        $this->middleware('CheckRole:0'); // Apply the 'CheckRole' middleware to only allow users with role 0 (user) to access these methods.
    }

    // Display the user's messages
    public function messages()
    {
        $user_id = auth()->user()->id;
        $messages = Message::where('counselor_id', $user_id)->get();

        return view('user.messages', compact('messages'));
    }

    // Display the message form for a specific counselor
    public function messageCounselor($id)
    {
        $counselor = User::findOrFail($id);
        return view('message_counselor', compact('counselor'));
    }

    // Send a message to a counselor
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

    // Display the call page for a specific counselor
    public function callCounselor($id)
    {
        $counselor = User::findOrFail($id);
        return view('call_counselor', compact('counselor'));
    }

    // Show a list of counselors
    public function showCounselors()
    {
        $counselors = User::where('role', 1)->get();
        return view('User.index', compact('counselors'));
    }

    // Show the user's dashboard
    public function index()
    {
        return view('User.index');
    }
}
