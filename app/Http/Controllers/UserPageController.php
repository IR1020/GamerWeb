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
        
        $count_report = Report::whereHas('user', function ($query) use ($user_id) {
            $query->where('id', $user_id);
        })->count('id');
        
        $popular_reports = Report::withCount('goods')->where('user_id',$user_id)->orderBy('goods_count', 'desc')->limit(3)->get();
        
        $datas = Report::whereHas('user', function ($query) use ($user_id) {
            $query->where('id', $user_id);
        })->orderBy('created_at', 'desc')->paginate(10);;

        return view('user_page', compact('flag','user_name','count_report','popular_reports','datas'));
    }
}
