<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MyPageController extends Controller
{
    public function get(int $id)
    {
        print($id);
        return view('myPage');
    }
}
