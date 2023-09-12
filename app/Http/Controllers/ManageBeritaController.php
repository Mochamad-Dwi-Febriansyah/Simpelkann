<?php

namespace App\Http\Controllers;

use App\Models\KelolaBerita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ManageBeritaController extends Controller
{
    public function getberita(){
        $data = KelolaBerita::get();
        return view('admin.manageberita.index', ['berita' => $data]);
    }
    public function addberita(){
        return view('admin.manageberita.add');
    }
    public function addberitaproccess(Request $request){
        $validator = Validator::make($request->all(), [
            'judul_berita' => 'required', 
            'isi_berita' => 'required',
            'gambar_berita' => 'required',
        ]); 
    if ($validator->fails()) {
        return redirect()->back()->withErrors($validator)->withInput();
        }
        $data = [
            'judul_berita' => $request->judul_berita,
            'isi_berita' => $request->isi_berita,
            'gambar_berita' => $request->gambar_berita,
        ];  
        $image = $request->file('gambar_berita');
        $destinationPath = 'image/';
        $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $profileImage);
        $data['gambar_berita'] = $profileImage;

        KelolaBerita::create($data);
        return redirect()->route('getBerita')->with('add_data_success', 'Anda Telah Berhasil menambah data berita');
    }
    public function deleteberita($id){   
        $data = KelolaBerita::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('delete_data_success', 'Anda Telah Berhasil menghapus data berita');
    }
}
