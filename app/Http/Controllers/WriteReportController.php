<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\DB;

class WriteReportController extends Controller
{
    public function get()
    {
        return view('write_report');
    }
    
    public function post(Request $request)
    {
        $this->validate($request, [
            'report_title' => 'required|max:100',
            'report_content' => 'required',
        ]);
        
        $report_title = $request->input('report_title');
        $report_content = $request->input('report_content');
        
        $user_id = $request->session()->get('user_id');

        DB::transaction(function () use($user_id,$report_title,$report_content) {
            $report = Report::create([
                'user_id'=>$user_id,
                'title'=>$report_title,
                'content'=>$report_content,
            ]);
        });
        
        $report_id = Report::latest()->value('id');
        
        return view('write_report_result', compact('report_id'));
    }
}
