<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SilayaController extends Controller
{
    public function daftarSilaya(){
        return view('dashboard.silaya.daftarOnline');
    } 
}
