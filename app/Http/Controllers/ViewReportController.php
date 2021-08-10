<?php

namespace App\Http\Controllers;

use App\Models\Report;
use App\Models\User;
use Illuminate\Http\Request;

class ViewReportController extends Controller
{
    public function get(Request $request, $report_id)
    {
        $datas = Report::with('user')->where('id', $report_id)->get();

        return view('viewReport', compact('datas'));
    }
}
