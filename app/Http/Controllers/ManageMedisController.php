<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medis;

class ManageMedisController extends Controller
{
    public function getmedis(){
        $data = Medis::get(); 
        // $data = Medis::with('regional')->get(); 
        return view('admin.managemedis.index', ['medis' => $data]);
    }
}
