<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Exception;

class HomeController extends Controller
{
    public function index()
    {
        try{
        $userRole = auth()->user()->role;

        if ($userRole == 0) {
            return redirect()->to('user');
        } elseif ($userRole == 1) {
            return redirect()->to('counselor');
        }
        }
        catch(Exception $e)
        {
            return redirect()->to('');
        }
    }
}
