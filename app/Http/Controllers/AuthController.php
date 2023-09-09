<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Medis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Hash;

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
        return view('auth.register');
    }
    public function registerProcess(Request $request){
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required'
        ]);
         if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
         }

        $data = [
            'username' => $request->username,
            'password' => $request->password,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat
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
}
