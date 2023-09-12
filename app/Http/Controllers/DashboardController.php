<?php

namespace App\Http\Controllers;

use App\Models\Child_User;
use App\Models\Imunisasies;
use App\Models\KelolaBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class DashboardController extends Controller
{
    public function dashboard(){
        if (!Auth::check()){
            return view('auth.login');
        }
        $berita = KelolaBerita::get();
        $data = [
            'berita' => $berita
        ];
        return view('dashboard.index', $data);
    }
    public function cekdatapendaftaran(){
        $datachilduser = Imunisasies::where('user_id', auth()->user()->id)->with('user')->with('child_users')->with('klinik')->get();
        return view('dashboard.cekdatapendaftaran', ['datasisandu' => $datachilduser]); 
    }
}
