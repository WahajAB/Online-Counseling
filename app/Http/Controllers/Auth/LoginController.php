<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected function redirectTo()
    {
        $userRole = auth()->user()->role;

        if ($userRole == 0) {
            return RouteServiceProvider::USER;
        } elseif ($userRole == 1) {
            return RouteServiceProvider::COUNSELOR;
        } else {
            return RouteServiceProvider::HOME;
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

