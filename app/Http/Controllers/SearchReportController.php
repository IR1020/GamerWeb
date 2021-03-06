<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class SearchReportController extends Controller
{
    public function get(Request $request)
    {
        $search_word = $request->input('search_word');

        $datas = Report::with('user:id,name')->where('title', 'like', '%' . $search_word . '%')->orWhere('content', 'like', '%' . $search_word . '%')->select('user_id','id','title','created_at')->orderBy('created_at', 'desc')->paginate(10);

        return view('search_report_result', compact('datas'));
    }
}
