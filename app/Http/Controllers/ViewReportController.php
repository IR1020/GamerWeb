<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class ViewReportController extends Controller
{
    public function get(Request $request, $report_id)
    {
        $user_id = Report::where('id', $report_id)->value('user_id');
        $report_title = Report::where('id', $report_id)->value('title');
        $report_content = Report::where('id', $report_id)->value('content');
        $user_name = User::where('id', $user_id)->value('name');

        return view('viewReport', compact("user_id", "user_name", "report_id", "report_title", "report_content"));
    }
}
