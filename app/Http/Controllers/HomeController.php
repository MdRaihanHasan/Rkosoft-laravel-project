<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// class HomeController extends Controller
// {
//     public function index(){
//         return redirect ('dashboard/index');
//     }
// }

class HomeController extends Controller
{
    public function index(){
        return view ('home');
    }
}
