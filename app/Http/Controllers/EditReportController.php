<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EditReportController extends Controller
{
    public function get(Request $request,$report_id)
    {   
        $datas = Report::where('id', $report_id)->get();
        
        return view('editReport', compact("datas"));
    }
    
    public function post(Request $request,$report_id)
    {
        $this->validate($request, [
            'report_title' => 'required',
            'report_content' => 'required',
        ]);
        
        $report_title = $request->input('report_title');
        $report_content = $request->input('report_content');

        DB::transaction(function () use($report_id,$report_title,$report_content) {
            Report::where('id',$report_id)->update([
                'title'=>$report_title,
                'content'=>$report_content]);
        });
        
        return view('editReportResult', compact('report_id'));
    }
}
