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
*/

Route::get('/', function () {
    return view('frontend.index');
});
Auth::routes(['verify' => true]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/info', [App\Http\Controllers\InfoController::class, 'index'])->name('info');
Route::get('/user', [App\Http\Controllers\UserController::class, 'showCounselors'])->name('User.index')->middleware('CheckRole:0');
Route::get('/counselor', [App\Http\Controllers\CounselorController::class, 'index'])->name('Counselor.index')->middleware('CheckRole:1');
Route::get('/user/messages', [App\Http\Controllers\UserController::class, 'messages'])->name('User.messages')->middleware('CheckRole:0');
Route::get('/counselor/messages', [App\Http\Controllers\CounselorController::class, 'messages'])->name('Counselor.messages');
Route::get('/user/message/{id}', [App\Http\Controllers\UserController::class, 'messageCounselor'])->name('message_counselor')->middleware('CheckRole:0');
Route::get('/counselor/message/{id}', [App\Http\Controllers\CounselorController::class, 'replyUser'])->name('reply_user')->middleware('CheckRole:1');
Route::post('/user/messages/{id}', [App\Http\Controllers\UserController::class, 'messageCounselors'])->name('message_counselors')->middleware('CheckRole:0');
Route::post('/counselor/messages/{id}', [App\Http\Controllers\CounselorController::class, 'replyUsers'])->name('reply_users')->middleware('CheckRole:1');
Route::get('/user/call/{id}', [App\Http\Controllers\callcontroller::class, 'index'])->name('call')->middleware('CheckRole:0');


Route::post("/validateMeeting", [App\Http\Controllers\MeetingController::class, 'validateMeeting'])->name("validateMeeting");
Route::post("/user/createMeeting/{id}", [App\Http\Controllers\MeetingController::class, 'createMeeting'])->name("createMeeting");
Route::post('/delete_message/{id}', [App\Models\Message::class, 'deleteMessage'])->name("delete_message");
Route::get("/meeting/{meetingId}", function($meetingId) {

    $METERED_DOMAIN = env('METERED_DOMAIN');
    return view('calling/meeting', [
        'METERED_DOMAIN' => $METERED_DOMAIN,
        'MEETING_ID' => $meetingId
    ]);
});