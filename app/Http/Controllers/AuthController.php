<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Medis;
use App\Models\Regional;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function login(){ 
            return view('auth.login'); 
    }

    public function loginProcess(Request $request){
        $validator = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        if (Auth::guard('web')->attempt($validator)) { 
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        if (Auth::guard('medis')->attempt($validator)) { 
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }
        return redirect()->back()->withErrors([
            'login_error' => 'Username atau Password terdapat kesalahan',
        ])->onlyInput('username'); 
        
    }
    public function register(){
        $region = Regional::get();
        return view('auth.register', ['region' => $region]);
    }
    public function registerProcess(Request $request){
        // $validator = Validator::make($request->all(), [
        //     'username' => 'required',
        //     'password' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'alamat' => 'required',
        //     'regional_id' => 'required',
        // ]);
        //  if ($validator->fails()) {
        //     return redirect()->back()->withErrors($validator)->withInput();
        //  } 
        // $request->validate([
        //     'username' => 'required',
        //     'password' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'alamat' => 'required',
        //     'regional_id' => 'required',
        // ]);  
        // dd($request->all());
        $random1 = rand(100,200);
        $random2 = rand(0,10);
        $tahun = Carbon::now()->format('ym'); 
        $kodeakses =  $tahun.$random1.$random2;
        $data = [
            'username' => $request->username,
            'password' => $request->password,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'regional_id' => $request->region_id,
            'kode_akses' => $kodeakses
            // 'role_id' => 'admin'
        ]; 
        $data['password'] = Hash::make($request->password);
        // Medis::create($data);
        User::create($data);
        return redirect()->route('login')->with('register_success', 'Anda Telah Berhasil Registrasi, Silahkan Login');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('logout_success', 'Anda Telah Berhasil Logout');;
    }

    public function getprofil(){
        return view('auth.profil');
    }
}
