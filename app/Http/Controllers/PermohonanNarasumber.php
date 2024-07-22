<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermohonanNarasumber extends Controller
{
    public function index(){
        return view('permohonan.permohonan_narasumber');
    }
}
