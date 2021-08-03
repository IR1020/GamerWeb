<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MyPageController extends Controller
{
    public function get(Request $request)
    {
        $id = $request->session()->get('id');
        
        $name = User::where('id', $id)->value('name');
        print($name);
        $request->session()->put('name',$name);
        return view('myPage', compact('id', 'name'));
    }
}
