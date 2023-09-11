<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klinik;

class ManageKlinikController extends Controller
{ 
    public function getklinik(){
        $data = Klinik::with('regional')->get(); 
        // $data = Medis::with('regional')->get(); 
        return view('admin.manageklinik.index', ['klinik' => $data]);
    }
}
