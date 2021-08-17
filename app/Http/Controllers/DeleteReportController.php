<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DeleteReportController extends Controller
{
    public function get(Request $request, $report_id)
    {
        return view('delete_report', compact("report_id"));
    }

    public function post(Request $request, $report_id)
    {
        $select = $request->input('select');

        if ($select == "はい") {
            DB::transaction(function () use ($report_id) {
                Report::where('id', $report_id)->delete();
            });
            
            $user_id = $request->session()->get('user_id');
            
            return redirect('user_page/'.$user_id);
        } else {
            return redirect('view_report/'.$report_id);
        }
    }
}
