<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class SearchReportController extends Controller
{
    public function get(Request $request)
    {   
        $search_word = $request->input('search_word');
        
        $search_results = Report::where('report_title', 'like', '%'.$search_word.'%')->orWhere('report_text', 'like', '%'.$search_word.'%')->select(['report_id','report_title','report_text'])->paginate(15);
        
        return view('searchReportResult', compact('search_results'));
    }
}
