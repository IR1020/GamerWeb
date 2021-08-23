<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class UserPageController extends Controller
{
    public function get(Request $request, $user_id)
    {
        $my_user_id = $request->session()->get('user_id');

        if ($my_user_id == $user_id) {
            $flag = true;
        } else {
            $flag = false;
        }

        $user_name = User::where('id', $user_id)->value('name');

        $datas = Report::whereHas('user', function ($query) use ($user_id) {
            $query->where('id', $user_id);
        })->orderBy('created_at', 'desc')->paginate(10);;

        return view('user_page', compact('user_name', 'datas', 'flag'));
    }
}
