<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserPageController extends Controller
{
    public function get(Request $request,$page_id)
    {
        $user_id = $request->session()->get('user_id');
        
        if($page_id==$user_id){
            $flag=true;
        }else{
            $flag=false;
        }

        $user_id=$page_id;
        
        $user_name = User::where('user_id', $user_id)->value('user_name');
        
        return view('userPage', compact('user_id', 'user_name','flag'));
    }
}
