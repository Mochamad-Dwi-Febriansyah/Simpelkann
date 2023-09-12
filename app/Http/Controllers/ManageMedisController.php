<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medis;
use App\Models\Klinik;
use Illuminate\Support\Facades\Validator;
use App\Models\Medis_Identitas;
use Illuminate\Support\Facades\Hash;

class ManageMedisController extends Controller
{
    public function getmedis(){
        $data = Medis_Identitas::with('klinik')->with('medis')->get(); 
        // $data = Medis::with('regional')->get(); 
        return view('admin.managemedis.index', ['medis' => $data]);
    }
    public function addmedis(){
        $data = Klinik::get();
        return view('admin.managemedis.add', ['klinik' => $data]);
    }
    public function addmedisproccess(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required', 
            'nama' => 'required',
            'klinik_id' => 'required',
            'role' => 'required',
        ]); 
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
        }
        $datamedis = [
            'username' => $request->username,
            'password' => $request->password,
            'role' => $request->role,
        ];
        $datamedis['password'] = Hash::make($request->password);
        Medis::create($datamedis);
        $getdatamedis = Medis::where('username', $request->username)->first();
        $datamedisidentitas = [
            'klinik_id' => $request->klinik_id,
            'medis_id' => $getdatamedis->id,
            'name' =>$request->nama
        ];
        Medis_Identitas::create($datamedisidentitas);
        return redirect()->route('getMedis')->with('add_data_success', 'Anda Telah Berhasil menambah data medis');
    }
}
