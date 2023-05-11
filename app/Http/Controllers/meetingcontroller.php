<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Message;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function createMeeting(Request $request, $id) {
        $METERED_DOMAIN = env('METERED_DOMAIN');
        $METERED_SECRET_KEY = env('METERED_SECRET_KEY');
    

        // Contain the logic to create a new meeting
        $response = Http::post("https://{$METERED_DOMAIN}/api/v1/room?secretKey={$METERED_SECRET_KEY}", [
            'autoJoin' => true
        ]);

        $roomName = $response->json("roomName");
        $message = new Message;
        $message->user_id = auth()->user()->id;
        $message->counselor_id = $id;
        $name = auth()->user()->name;
        $message->subject = "$name is inviting you to a meeting!";
        $message->message = "Please Click the Following Link to Join the Meeting: http://127.0.0.1:8000/meeting/{$roomName}";
        $message->save();
        
        return redirect("/meeting/{$roomName}"); // We will update this soon.
    }

    public function validateMeeting(Request $request) {
        $METERED_DOMAIN = env('METERED_DOMAIN');
        $METERED_SECRET_KEY = env('METERED_SECRET_KEY');

        $meetingId = $request->input('meetingId');

        // Contains logic to validate existing meeting
        $response = Http::get("https://{$METERED_DOMAIN}/api/v1/room/{$meetingId}?secretKey={$METERED_SECRET_KEY}");

        $roomName = $response->json("roomName");


        if ($response->status() === 200)  {
            return redirect("/meeting/{$roomName}"); // We will update this soon
        } else {
            return redirect()->back()->with('failure', 'No such room exists.');
        }
    }
}
