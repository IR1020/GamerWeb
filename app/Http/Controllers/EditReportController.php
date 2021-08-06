<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditReportController extends Controller
{
    public function get(Request $request,$report_id)
    {   
        $report_title = Report::where('report_id', $report_id)->value('report_title');
        $report_text = Report::where('report_id', $report_id)->value('report_text');
        
        return view('editReport', compact("report_id","report_title", "report_text"));
    }
    
    public function post(Request $request,$report_id)
    {
        $this->validate($request, [
            'report_title' => 'required',
            'report_text' => 'required',
        ]);
        
        $report_title = $request->input('report_title');
        $report_text = $request->input('report_text');

        DB::transaction(function () use($report_id,$report_title,$report_text) {
            Report::where('report_id',$report_id)->update([
                'report_title'=>$report_title,
                'report_text'=>$report_text]);
        });
        
        return view('writeReportResult', compact('report_id'));
    }
}
