@extends('layouts.header-footer')

@section('content')
{{-- daftar online --}}
<section class="daftar-online">
  <div class="container">
      @if(session('register_success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span><strong>Selamat, </strong>{{ session('register_success') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
      @if(session('daftar_failed'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span><strong>Maaf, </strong>{{ session('daftar_failed') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
      <h5 class="fw-500 mb-3">DAFTAR ONLINE SI SANDU</h5>
      <!-- <span>silahkan isi form ini sesuai data yang anda miliki</span> -->
      <div class="card">
        <div class="card-header">
          <h6 class="card-title">
            Silahkan isi form ini sesuai data yang anda miliki
          </h6>
        </div>
        <div class="card-body">
          <form class="row g-3" action="{{ route('daftarOnlineProccess') }}" method="POST">  
            @csrf
            <div class="col-md-12">
              <label for="inputnama" class="form-label">Kode Akses Anak</label>
              <span class="text-danger">* didapatkan setelah mendaftarkan Anak</span>
              <a class="bg-primary px-2 float-end rounded-1" href="{{ route('daftarAnak') }}">daftarkan Anak</a>
              <input type="text" class="form-control" id="inputnama" name="kode_akses">
            </div>  
            <div class="col-md-6">
              <label for="inputState" class="form-label">Pilih Posyandu</label>
              <select name="klinik_id" id="" class="form-select">
                @foreach($klinik as $list)
                <option value={{ $list->id }}>{{ $list->nama_klinik }}</option>
                @endforeach
              </select>
            </div>
            <div class="col-md-6">
              <label for="inputnama" class="form-label">Tanggal</label>
              <input type="text" class="form-control" name="tanggal" id="inputnama" placeholder="{{ $datenow }}" value="{{ $datenow }}" readonly>
            </div>  

            <div class="col-12">
              <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
{{-- end daftar online --}}
@endsection