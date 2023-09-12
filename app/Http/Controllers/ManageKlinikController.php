<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klinik;
use App\Models\Regional;
use Illuminate\Support\Facades\Validator;

class ManageKlinikController extends Controller
{ 
    public function getklinik(){
        $data = Klinik::with('regional')->get(); 
        // $data = Medis::with('regional')->get(); 
        return view('admin.manageklinik.index', ['klinik' => $data]);
    }
    public function addklinik(){
        $region = Regional::get();
        return view('admin.manageklinik.add', ['region' => $region]);
    }
    public function addKlinikProccess(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_klinik' => 'required',
            'alamat' => 'required', 
            'regional_id' => 'required',
        ]); 
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = [
            'nama_klinik' => $request->nama_klinik,
            'alamat' => $request->alamat,
            'regional_id' => $request->regional_id,
        ];
        Klinik::create($data);
        return redirect()->route('getKlinik')->with('add_klinik_success', 'Anda Telah Berhasil Menambah data klinik');
    }
}
