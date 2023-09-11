<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Child_User;
use App\Models\Klinik;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SisanduController extends Controller
{
    public function daftarSisandu(){
        $klinik = Klinik::get();
        return view('dashboard.sisandu.daftarOnline', ['klinik' => $klinik]);
    }

    public function jadwalImunisasi(){
        return view('dashboard.sisandu.jadwalImunisasi');
    }
    
    public function daftarAnak(){
        return view('dashboard.sisandu.daftarAnak');
    }
    public function daftarAnakProcess(Request $request){ 
        $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'kode_akses' => 'required', 
                'jenis_kelamin' => 'required',
                'tanggal_lahir' => 'required',
            ]); 
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
            }
        $cekuserid = User::where('kode_akses', $request->kode_akses)->first();
        $random1 = rand(200,500);
        $random2 = rand(10,20);
        $tahun = Carbon::now()->format('ym'); 
        $kodeakses =  $tahun.$random1.$random2;
        $data = [
            'nama' => $request->nama,
            'user_id' => $cekuserid->id,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'kode_akses_anak' => $kodeakses
        ];
        Child_User::create($data);
        return redirect()->route('daftarSisandu')->with('register_success', 'Anda Telah Berhasil registrasi Anak, Silahkan Daftar');
    }
}
