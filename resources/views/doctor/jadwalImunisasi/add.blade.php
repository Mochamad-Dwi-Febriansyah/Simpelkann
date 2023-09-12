@extends('layouts.header-footer')

@section('content')
{{-- daftar online --}}
<section class="daftar-online">
  <div class="container">
      @if(session('add_jadwal_success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <span><strong>Selamat, </strong>{{ session('add_jadwal_success') }}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
      <h5 class="fw-500 mb-3">TAMBAH DATA JADWAL SISANDU</h5>
      <!-- <span>silahkan isi form ini sesuai data yang anda miliki</span> -->
      <div class="card">
        <div class="card-header">
          <h6 class="card-title">
            Silahkan isi form ini sesuai data yang anda miliki
          </h6>
        </div>
        <div class="card-body">
          <form class="row g-3" action="{{ route('addJadwalImunisasiProccess') }}" method="POST">  
            @csrf
            <div class="col-md-6">
              <label for="inputnama" class="form-label">Bulan Ke</label>  
              <input type="number" class="form-control" id="inputnama" name="bulan">
            </div>   
            <div class="col-md-6">
              <label for="inputnama" class="form-label">Nama Imunisasi</label>  
              <input type="text" class="form-control" id="inputnama" name="nama_imunisasi">
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