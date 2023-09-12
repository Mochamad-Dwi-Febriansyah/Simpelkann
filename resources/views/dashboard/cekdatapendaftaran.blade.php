@extends('layouts.header-footer')
@section('content')

<section class="cek-pendaftaran">
    <div class="container">
      <h5 class="fw-500 mb-3">CEK DATA PENDAFTARAN</h5>
      <div class="row row-cols-1 g-2">
 @foreach($datasisandu as $list)       
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="fw-500">SI SANDU</h5>
                        <h6 class="m-0">{{ $list->tanggal }}</h6>
                        <button class="fs-08 fw-650 m-0 backg-biru-pastel border-0 p-btn rounded-2">Cetak Kartu</button>
                    </div>
                </div>
                <div class="card-body">
                  <table class="table">
                    <tbody>
                      <tr>
                        <td class="px-0">Nama Anak</td>
                        <td class="px-0">{{ $list->child_users->nama }}</td>
                      </tr> 
                      <tr>
                        <td class="px-0">Antrian Ke</td>
                        <td class="px-0">{{ $list->antrian_ke}}</td>
                      </tr> 
                      <tr>
                        <td class="px-0">Nama Klinik</td>
                        <td class="px-0">{{ $list->klinik->nama_klinik }}</td>
                      </tr> 
                    </tbody>
                  </table>
                </div>
            </div> 
        </div> 
@endforeach


      </div>
    </div>
</section>

@endsection