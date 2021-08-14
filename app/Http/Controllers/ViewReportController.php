<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class ViewReportController extends Controller
{
    public function get(Request $request, $report_id)
    {
        $user_id = $request->session()->get('user_id');
        
        $writer_id = Report::where('id', $report_id)->value('user_id');
        
        if ($user_id == $writer_id) {
            $flag = true;
        } else {
            $flag = false;
        }
        
        $datas = Report::with('user')->where('id', $report_id)->get();

        return view('view_report', compact('datas','flag'));
    }
}
