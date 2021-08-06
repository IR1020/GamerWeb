<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Flag;

class LoginController extends Controller
{
    public function get()
    {
        return view('login');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'user_name' => 'required',
            'user_pass' => 'required',
        ]);

        $user_name = $request->input('user_name');
        $user_pass = $request->input('user_pass');

        $user_id = User::where('user_name', $user_name)->where('user_pass', $user_pass)->value('user_id');
        
        if ($user_id != null) {
            $flag = true;
        } else {
            $flag = false;
        }

        $request->session()->put('user_id', $user_id);
        $request->session()->put('user_name', $user_name);
            
        $page_id=$user_id;

        return view('loginResult', compact('user_id','user_name','page_id', 'flag'));
    }
}
