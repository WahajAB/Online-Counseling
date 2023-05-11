<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class callcontroller extends Controller
{
    public function index($id)
    {
        $counselor = User::findOrFail($id);
        return view('calling.welcome', compact('counselor'));
    }
}
