<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Child_User;
use App\Models\Klinik;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Imunisasies;
use App\Models\JadwalImunisasies;

class SisanduController extends Controller
{
    public function daftarSisandu(){
        $klinik = Klinik::get();
        $datenow = Carbon::now()->format('Y-m-d');
        return view('dashboard.sisandu.daftarOnline', ['klinik' => $klinik, 'datenow' => $datenow]);
    }
    public function daftarOnlineProccess(Request $request){
        $validator = Validator::make($request->all(), [
            'kode_akses' => 'required',
            'klinik_id' => 'required', 
            'tanggal' => 'required',
        ]); 
        if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
    }
    $datenow = Carbon::now()->format('Y-m-d');
    $cekuserid = Child_User::where('kode_akses_anak', $request->kode_akses)->first();
    if(!$cekuserid) return redirect()->back()->with('daftar_failed', 'Data Anak Tidak Ada');
    $cekantrian = Imunisasies::where('klinik_id', $request->klinik_id)->where('tanggal', $datenow)->count();
        $data = [
            'child_users_id' => $cekuserid->id,
            'user_id' => $cekuserid->user_id,
            'klinik_id' => $request->klinik_id,
            'tanggal' => $request->tanggal,
            'antrian_ke' => $cekantrian +1
        ];
        Imunisasies::create($data);
        return redirect()->route('dashboard')->with('daftar_success', 'Anda Telah Berhasil daftar Imunisasi Anak, Silahkan Daftar');
    }

    public function jadwalImunisasi(){
        $jadwal_imunisasi = JadwalImunisasies::get();
        return view('dashboard.sisandu.jadwalImunisasi', ['jadwal_imunisasi'=>$jadwal_imunisasi]);
    }
    public function addjadwalImunisasi(){
        return view('doctor.jadwalImunisasi.add');
    }
    public function addjadwalImunisasiProccess(Request $request){
        $validator = Validator::make($request->all(), [
            'bulan' => 'required',
            'nama_imunisasi' => 'required',  
        ]); 
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = [
            'bulan' => $request->bulan,
            'nama_imunisasi' => $request->nama_imunisasi 
        ];
        JadwalImunisasies::create($data);
        return redirect()->route('jadwalImunisasi')->with('add_jadwal_success', 'Anda Telah Berhasil Menambah jadwal Imunisasi');
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
        return redirect()->route('daftarSisandu')->with('register_success', 'Anda Telah Berhasil registrasi Anak, Kode Akses Anak dapat di menu profil');
    }
}
