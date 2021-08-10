<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SignUpController extends Controller
{
    public function get()
    {
        return view('signUp');
    }

    public function post(Request $request)
    {
        $this->validate($request, [
            'user_name' => 'required|max:50',
            'user_password' => 'required|unique:users,password|max:50',
        ]);

        $user_name = $request->input('user_name');
        $user_password = $request->input('user_password');

        DB::transaction(function () use ($user_name, $user_password) {
            $user = User::create([
                'name'=>$user_name,
                'password'=>$user_password,
            ]);
        });

        $user_id = User::where('name', $user_name)->where('password', $user_password)->value('id');

        if ($user_id != null) {
            $flag = true;
        } else {
            $flag = false;
        }

        $request->session()->put('user_id', $user_id);
        $request->session()->put('user_name', $user_name);

        $page_id = $user_id;

        return view('signUpResult', compact('user_id', 'user_name', 'page_id', 'flag'));
    }
}
