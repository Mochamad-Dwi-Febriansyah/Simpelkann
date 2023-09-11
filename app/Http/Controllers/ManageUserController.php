<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ManageUserController extends Controller
{
    public function getuser(){
        $data = User::with('regional')->get(); 
        return view('admin.manageuser.index', ['user' => $data]);
    }
}
