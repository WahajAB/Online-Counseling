<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class HomeController extends Controller
{
    public function index()
    {
        $userRole = auth()->user()->role;

        if ($userRole == 0) {
            return redirect()->to('user');
        } elseif ($userRole == 1) {
            return redirect()->to('counselor');
        }
    }
}
