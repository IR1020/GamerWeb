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
        $this->validate($request,[
            'name'=>'required',
            'pass'=>'required',
        ]);
        
        $name=$request->input('name');
        $pass=$request->input('pass');

        $user=new User();
        $id=User::where('name',$name)->where('pass',$pass)->value('id');
        // print "$id";
        if($id==null){$isFlag=0;}
        else{$isFlag=1;}
        print "$isFlag";
        $flag=new Flag($isFlag);
        return view('loginResult', compact('flag'));
        
        
        $user->User($id,$name,$pass);

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
