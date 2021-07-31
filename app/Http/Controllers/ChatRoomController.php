<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\User\User;

class ChatRoomController extends Controller
{
    public function get(Request $request)
    {
        $roomNumber=$request->input('roomNumber');
        print($roomNumber);
        $a="a";
        $b="b";
        $c=$a.$b;
        print($c);
    }

    public function post(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'pass'=>'required|unique:users,pass',
        ]);
        $name=$request->input('name');
        $pass=$request->input('pass');
        //if ($p != "") {$pass = (int)$p;}
        //$isFlag=0;

        $user = new User();
        $user->name=$name;
        $user->pass=$pass;
        $user->save();
            
        $id=User::where('name',$name)->where('pass',$pass)->value('id');
        $user->User($id,$name,$pass);

        $request->session('user', $user);
        return view('tourokuResult', compact('user'));
    }
}
