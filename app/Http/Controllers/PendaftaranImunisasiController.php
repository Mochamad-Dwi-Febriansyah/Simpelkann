<?php

namespace App\Http\Controllers;

use App\Models\Imunisasies;
use App\Models\Medis;
use App\Models\Medis_Identitas;
use Illuminate\Http\Request;
use Carbon\Carbon;

class PendaftaranImunisasiController extends Controller
{
    public function getpendaftaranimunisasi(){ //by klinik_id
        $datenow = Carbon::now()->format('Y-m-d');
        $datamedis = Medis_Identitas::where('id', auth()->user()->id)->first();
        $imunisasi = Imunisasies::where('klinik_id', $datamedis->klinik_id)->where('tanggal',$datenow)->with('child_users')->with('klinik')->get();
        return view('doctor.managesisandu.index', ['imunisasi' => $imunisasi]);
 
    }
}
