<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function get(Request $request)
    {
        $request->session()->forget('user_id');
        
        return view('topPage');
    }
}
