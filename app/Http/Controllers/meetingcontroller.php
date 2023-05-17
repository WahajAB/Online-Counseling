<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use App\Models\Message;
use Illuminate\Http\Request;

class MeetingController extends Controller
{
    public function createMeeting(Request $request, $id)
    {
        $METERED_DOMAIN = env('METERED_DOMAIN');
        $METERED_SECRET_KEY = env('METERED_SECRET_KEY');

        // Logic to create a new meeting
        $response = Http::post("https://{$METERED_DOMAIN}/api/v1/room?secretKey={$METERED_SECRET_KEY}", [
            'autoJoin' => true
        ]);

        $roomName = $response->json("roomName");

        // Save the message with meeting details
        $message = new Message;
        $message->user_id = auth()->user()->id;
        $message->counselor_id = $id;
        $name = auth()->user()->name;
        $message->subject = "$name is inviting you to a meeting!";
        $message->message = "Click this URL to Join the Meeting: http://127.0.0.1:8000/{$id}/meeting/{$roomName}";

        $message->save();

        return redirect("/{$id}/meeting/{$roomName}"); // Redirect to the meeting page (to be updated).
    }

    public function validateMeeting(Request $request, $id)
    {
        $METERED_DOMAIN = env('METERED_DOMAIN');
        $METERED_SECRET_KEY = env('METERED_SECRET_KEY');

        $meetingId = $request->input('meetingId');

        // Logic to validate an existing meeting
        $response = Http::get("https://{$METERED_DOMAIN}/api/v1/room/{$meetingId}?secretKey={$METERED_SECRET_KEY}");

        $roomName = $response->json("roomName");

        if ($response->status() === 200) {
            return redirect("/{$id}/meeting/{$roomName}"); // Redirect to the meeting page if the room exists.
        } else {
            return redirect()->back()->with('failure', 'No such room exists.'); // Redirect back with failure message if the room doesn't exist.
        }
    }
}
