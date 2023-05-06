<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
})->name('d');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('User');
Route::get('/counselor', [App\Http\Controllers\CounselorController::class, 'index'])->name('Counselor');
