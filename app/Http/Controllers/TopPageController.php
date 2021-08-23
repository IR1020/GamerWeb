<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class TopPageController extends Controller
{
    public function get()
    {
        $datas = Report::with('user:id,name')->select('user_id','id','title','created_at')->orderBy('created_at', 'desc')->paginate(10);

        return view('top_page', compact('datas'));
    }
}
