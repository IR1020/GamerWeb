<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteReportController extends Controller
{
    public function get(Request $request, $report_id)
    {
        return view('deleteReport', compact("report_id"));
    }

    public function post(Request $request, $report_id)
    {
        $select = $request->input('select');

        if ($select == "はい") {
            $flag = true;
        } else {
            $flag = false;
        }

        if ($flag == true) {
            DB::transaction(function () use ($report_id) {
                Report::where('id', $report_id)->delete();
            });
        }

        $user_id = $request->session()->get('user_id');

        $page_id = $user_id;

        return view('deleteReportResult', compact('page_id', 'flag'));
    }
}
