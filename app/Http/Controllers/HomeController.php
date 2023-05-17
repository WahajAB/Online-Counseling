<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Exception;

class HomeController extends Controller
{
    public function index()
    {
        try {
            // Get the user's role
            $userRole = auth()->user()->role;

            if ($userRole == 0) {
                // If the role is 0, redirect to user route
                return redirect()->to('user');
            } elseif ($userRole == 1) {
                // If the role is 1, redirect to counselor route
                return redirect()->to('counselor');
            }
        } catch (Exception $e) {
            //else redirect to the home page
            return redirect()->to('');
        }
    }
}
