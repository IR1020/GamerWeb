<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\DB;

class WriteReportController extends Controller
{
    public function get()
    {
        return view('writeReport');
    }
    
    public function post(Request $request)
    {
        $this->validate($request, [
            'report_title' => 'required',
            'report_text' => 'required',
        ]);
        
        $report_title = $request->input('report_title');
        $report_text = $request->input('report_text');
        
        $user_id = $request->session()->get('user_id');

        DB::transaction(function () use($user_id,$report_title,$report_text) {
            $report = new Report();
            $report->user_id = $user_id;
            $report->report_title = $report_title;
            $report->report_text = $report_text;
            $report->save();
        });
        
        $report_id = Report::latest()->value('report_id');
        
        return view('writeReportResult', compact('report_id'));
    }
}
