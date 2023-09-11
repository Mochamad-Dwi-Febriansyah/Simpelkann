@extends('layouts.header-footer')

@section('content')
<section class="daftar-online">
    <div class="container">
      <h5 class="fw-500 mb-3">PROFIL</h5>
      <!-- <span>silahkan isi form ini sesuai data yang anda miliki</span> -->
      <div class="card border-0">
        <div class="card-header d-flex justify-content-center p-3"> 
            <img src="{{ asset('assets/img/Logo SIMPELKAN(2).png') }}" style="width: 90px" alt=""> 
        </div>
        <div class="card-body"> 
            <table class="table">
                <tbody>
                  <tr>
                    <td class="fw-bold">Nama</td>
                    <td>{{ auth()->user()->username }}</td>
                  </tr>
                  <tr>
                    <td class="fw-bold">Kode Akses</td>
                    <td>{{ auth()->user()->kode_akses }}</td>
                  </tr>
                  <tr>
                    <td class="fw-bold">Tanggal Lahir</td>
                    <td>{{ auth()->user()->tanggal_lahir }}</td>
                  </tr>
                  <tr>
                    <td class="fw-bold">Alamat</td>
                    <td>{{ auth()->user()->alamat }}</td>
                  </tr>
                  <tr>
                    <td class="fw-bold">Kecamatan</td>
                    <td>{{ auth()->user()->regional->kecamatan }}</td>
                  </tr>
                  <tr>
                    <td class="fw-bold">Kabupaten</td>
                    <td>{{ auth()->user()->regional->kabupaten }}</td>
                  </tr>
                </tbody>
              </table>
        </div>
      </div>
    </div>
</section>
@endsection