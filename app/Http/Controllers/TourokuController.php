<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User\User;
//use App\Models\Flag;

class TourokuController extends Controller
{
    public function get()
    {
        return view('touroku');
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
            
        //$flag=new Flag($isFlag);
        $request->session('user', $user);
        return view('tourokuResult', compact('user'));
        
        // $isFlag=1;
        // $flag=new Flag($isFlag);
        // return view('tourokuResult', compact('flag'));

        // $isFlag = 0;
        // if($a!=0)
        // if(!($a==0))
        // if(!($user->userCheck($name,$pass))){
        //     $id = $user->generateId();
        //     $user->tableInsert($id,$name,$pass);
    }
}
