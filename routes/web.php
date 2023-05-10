<?php

use App\Http\Controllers\callcontroller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeetingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.index');
});

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/user', [App\Http\Controllers\UserController::class, 'showCounselors'])->name('User.index');
Route::get('/user/call/{id}', [App\Http\Controllers\UserController::class, 'callCounselor'])->name('call_counselor');
Route::get('/counselor', [App\Http\Controllers\CounselorController::class, 'index'])->name('Counselor.index');
Route::get('/user/messages', [App\Http\Controllers\UserController::class, 'messages'])->name('User.messages');
Route::get('/counselor/messages', [App\Http\Controllers\CounselorController::class, 'messages'])->name('Counselor.messages');
Route::get('/user/message/{id}', [App\Http\Controllers\UserController::class, 'messageCounselor'])->name('message_counselor');
Route::get('/counselor/message/{id}', [App\Http\Controllers\CounselorController::class, 'replyUser'])->name('reply_user');
Route::post('/user/messages/{id}', [App\Http\Controllers\UserController::class, 'messageCounselors'])->name('message_counselors');
Route::post('/counselor/messages/{id}', [App\Http\Controllers\CounselorController::class, 'replyUsers'])->name('reply_users');


Route::get('/call', [callcontroller::class, 'index'])->name('call');

Route::post("/createMeeting", [MeetingController::class, 'createMeeting'])->name("createMeeting");

Route::post("/validateMeeting", [MeetingController::class, 'validateMeeting'])->name("validateMeeting");

Route::get("/meeting/{meetingId}", function($meetingId) {

    $METERED_DOMAIN = env('METERED_DOMAIN');
    return view('calling/meeting', [
        'METERED_DOMAIN' => $METERED_DOMAIN,
        'MEETING_ID' => $meetingId
    ]);
});