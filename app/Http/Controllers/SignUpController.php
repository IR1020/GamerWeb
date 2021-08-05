<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Flag;
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
            'user_name' => 'required',
            'user_pass' => 'required|unique:users,user_pass',
        ]);
        
        $user_name = $request->input('user_name');
        $user_pass = $request->input('user_pass');
        //if ($p != "") {$pass = (int)$p;}
        //$isFlag=0;

        DB::transaction(function () use($user_name,$user_pass) {
            $user = new User();
            $user->user_name = $user_name;
            $user->user_pass = $user_pass;
            $user->save();
        });

        $user_id = User::where('user_name', $user_name)->where('user_pass', $user_pass)->value('user_id');

        if ($user_id != null) {
            $isFlag = true;
        } else {
            $isFlag = false;
        }

        $flag = new Flag($isFlag);
        $request->session()->put('flag', $flag);
        $request->session()->put('user_id', $user_id);
        $request->session()->put('user_name', $user_name);
        
        $page_id=$user_id;
        
        return view('signUpResult', compact('user_id','user_name','page_id', 'flag'));

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
