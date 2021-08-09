<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class SearchReportController extends Controller
{
    public function get(Request $request)
    {
        $search_word = $request->input('search_word');

        $search_results = Report::where('title', 'like', '%' . $search_word . '%')->orWhere('content', 'like', '%' . $search_word . '%')->select(['id', 'title', 'content'])->paginate(15);

        return view('searchReportResult', compact('search_results'));
    }
}
