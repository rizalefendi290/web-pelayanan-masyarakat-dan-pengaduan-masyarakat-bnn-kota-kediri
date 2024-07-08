<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        if(auth()->user()->role == 'admin'){
            return view('admin.dashboard');
        } else{
            return view('user.dashboard');
        }
    }
}
