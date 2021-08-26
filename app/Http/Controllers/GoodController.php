<?php

namespace App\Http\Controllers;

use App\Models\Good;
use App\Models\Report;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    public function add(Request $request, $user_id, $report_id)
    {
        $good_user = Good::where('report_id', $report_id)->where('user_id', $user_id)->value('user_id');

        $my_user_id = $request->session()->get('user_id');
        
        $writer_id = Report::where('id', $report_id)->value('user_id');

        if ($good_user == null && $my_user_id == $user_id && $writer_id != $user_id) {
            DB::transaction(function () use ($user_id, $report_id) {
                $good = Good::create([
                    'user_id' => $user_id,
                    'report_id' => $report_id,
                ]);
            });
        }

        $writer_id = Report::where('id', $report_id)->value('user_id');

        if ($user_id == $writer_id) {
            $flag = true;
        } else {
            $flag = false;
        }

        $datas = Report::with('user:id,name')->where('id', $report_id)->get();

        return view('view_report', compact('datas', 'flag'));
    }

    public function delete(Request $request, $user_id, $report_id)
    {
        $my_user_id = $request->session()->get('user_id');

        if ($my_user_id == $user_id) {
            DB::transaction(function () use ($user_id, $report_id) {
                Good::where('user_id', $user_id)->where('report_id', $report_id)->delete();
            });
        }

        $writer_id = Report::where('id', $report_id)->value('user_id');

        if ($user_id == $writer_id) {
            $flag = true;
        } else {
            $flag = false;
        }

        $datas = Report::with('user:id,name')->where('id', $report_id)->get();

        return view('view_report', compact('datas', 'flag'));
    }
}
