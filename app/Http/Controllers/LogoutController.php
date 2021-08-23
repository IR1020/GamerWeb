<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function get(Request $request)
    {
        $request->session()->forget('user_id');
        
        $datas = Report::with('user')->orderBy('created_at', 'desc')->paginate(10);
        
        return view('top_page', compact('datas'));
    }
}
