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
            'user_password' => 'required',
        ]);

        $user_name = $request->input('user_name');
        $user_password = $request->input('user_password');

        $user_id = User::where('name', $user_name)->where('password', $user_password)->value('id');

        if ($user_id != null) {
            $request->session()->put('user_id', $user_id);
            $request->session()->put('user_name', $user_name);
            
            return redirect('user_page/' . $user_id);
        } else {
            return redirect('login');
        }
    }
}
