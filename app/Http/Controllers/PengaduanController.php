<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    public function index(){
        return view('pengaduan.index');
    }

    public function form(){
        return view('pengaduan.form');
    }
}
