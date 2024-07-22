<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermohonanNarasumber extends Model
{
    use HasFactory;
    public function index(){
        return view('permohonan.permohonan_narasumber');
    }
}
