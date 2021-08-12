<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteUserController extends Controller
{
    public function get(Request $request, $user_id)
    {
        return view('delete_user', compact("user_id"));
    }

    public function post(Request $request, $user_id)
    {
        $select = $request->input('select');

        if ($select == "はい") {
            $flag = true;
            $request->session()->forget('user_id');
            $page_id = null;
        } else {
            $flag = false;
            $user_id = $request->session()->get('user_id');
            $page_id = $user_id;
        }

        if ($flag == true) {
            DB::transaction(function () use ($user_id) {
                User::where('id', $user_id)->delete();
            });
        }

        return view('delete_user_result', compact('page_id', 'flag'));
    }
}
