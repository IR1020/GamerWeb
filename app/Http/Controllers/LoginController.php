<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User\User;
use App\Models\Number;

class LoginController extends Controller
{
    public function get()
    {
        return view('login');
    }

    public function post(Request $request)
    {
        $pass=0;
        $name = $request->input('name');
        $p = $request->input('pass');
        if ($p != "") {
            $pass=(int)$p;
        }

        $user = new User();

        if ($user->userCheck($name, $pass) == true) {
            $id = $user->generateId();
            $user->tableInsert($id, $name, $pass);

            $user->User($id, $name, $pass);
            $number = new Number(0);
            $request->session('number', $number);
            $request->session('user', $user);
            return view('loginResult', compact('user', 'number'));
        }
        $number = new Number(1);
        $request->session('number', $number);
        $request->session('user', $user);
        return view('loginResult', compact('user', 'number'));
    }
}
