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
            'name' => 'required',
            'pass' => 'required',
        ]);

        $name = $request->input('name');
        $pass = $request->input('pass');

        $user = new User();
        $id = User::where('name', $name)->where('pass', $pass)->value('id');
        // print "$id";
        if ($id != null) {
            $isFlag = true;
        } else {
            $isFlag = false;
        }

        $flag = new Flag($isFlag);
        $request->session('flag', $flag);

        $user->User($id, $name, $pass);
        $request->session('user', $user);
        // print($user->getId());

        return view('loginResult', compact('user', 'flag'));
    }
}
