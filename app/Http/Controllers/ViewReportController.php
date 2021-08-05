<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class ViewReportController extends Controller
{
    public function get(Request $request,$report_id)
    {   
        $user_id = Report::where('report_id', $report_id)->value('user_id');
        $report_title = Report::where('report_id', $report_id)->value('report_title');
        $report_text = Report::where('report_id', $report_id)->value('report_text');
        $user_name = User::where('user_id', $user_id)->value('user_name');
        
        return view('viewReport', compact("user_id", "user_name","report_id","report_title", "report_text"));
    }
}
