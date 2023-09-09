<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SisanduController extends Controller
{
    public function daftarSisandu(){
        return view('dashboard.sisandu.daftarOnline');
    }

    public function jadwalImunisasi(){
        return view('dashboard.sisandu.jadwalImunisasi');
    }
}
