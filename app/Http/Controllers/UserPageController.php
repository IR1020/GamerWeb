<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserPageController extends Controller
{
    public function get(Request $request,$user_id)
    {
        $my_user_id = $request->session()->get('user_id');

        if ($my_user_id == $user_id) {
            $flag = true;
        } else {
            $flag = false;
        }

        $user_name = User::where('id', $user_id)->value('name');

        return view('user-page', compact('user_id', 'user_name', 'flag'));
    }
}
