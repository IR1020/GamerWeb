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

        $datas = User::with('reports')->where('id', $user_id)->get();

        return view('user_page', compact('datas', 'flag'));
    }
}
