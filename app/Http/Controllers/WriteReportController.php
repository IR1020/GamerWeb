<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Report;
use Illuminate\Support\Facades\DB;

class WriteReportController extends Controller
{
    public function get()
    {
        // $datas = Report::with('user')->get();
        // foreach($datas as $data){
        //     echo $data->user->name;
        // }
        return view('writeReport');
    }
    
    public function post(Request $request)
    {
        $this->validate($request, [
            'report_title' => 'required',
            'report_content' => 'required',
        ]);
        
        $report_title = $request->input('report_title');
        $report_content = $request->input('report_content');
        
        $user_id = $request->session()->get('user_id');

        DB::transaction(function () use($user_id,$report_title,$report_content) {
            $report = new Report();
            $report->user_id = $user_id;
            $report->title = $report_title;
            $report->content = $report_content;
            $report->save();
        });
        
        $report_id = Report::latest()->value('id');
        
        return view('writeReportResult', compact('report_id'));
    }
}
