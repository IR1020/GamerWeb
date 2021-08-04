<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class MyPageController extends Controller
{
    public function get(Request $request)
    {
        $user_id = $request->session()->get('user_id');
        
        $user_name = User::where('user_id', $user_id)->value('user_name');
        
        return view('myPage', compact('user_id', 'user_name'));
    }
}
