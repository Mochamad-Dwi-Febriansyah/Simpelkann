@extends('layouts.header-footer')

@section('content')
{{-- daftar online --}}
<section class="daftar-online">
    <div class="container">
      <h5 class="fw-500 mb-3">DAFTAR ONLINE SI SANDU</h5>
      <!-- <span>silahkan isi form ini sesuai data yang anda miliki</span> -->
      <div class="card">
        <div class="card-header">
          <h6 class="card-title">
            Silahkan isi form ini sesuai data yang anda miliki
          </h6>
        </div>
        <div class="card-body">
          <form class="row g-3" action="{{ route('daftarAnakProcess') }}" method="POST">
            @csrf
            <div class="col-md-12">
                <label for="inputEmail4" class="form-label">Nama Anak</label>
                <a class="bg-primary px-2 float-end rounded-1" href="{{ route('daftarSisandu') }}">kembali</a>
              <input type="text"  name="nama" class="form-control" id="inputEmail4" />
            </div>
            <div class="col-md-6">
              <label for="inputAddress" class="form-label">Kode Akses Ibu</label>
              <input type="text" name="kode_akses" class="form-control" id="inputAddress" />
            </div>
            <div class="col-md-6">
              <label for="inputDate4" class="form-label"
                >Jenis Kelamin</label
              >
              <div class="form-control border-0">
                <div class="form-check-inline">
                  <input
                    class="form-check-input"
                    name="jenis_kelamin"
                    type="radio"
                    id="inlineCheckbox1"
                    value="lk"
                  />
                  <label class="form-check-label" for="inlineCheckbox1"
                    >Laki-Laki</label
                  >
                </div>
                <div class="form-check-inline">
                  <input
                    class="form-check-input"
                    name="jenis_kelamin"
                    type="radio"
                    id="inlineCheckbox2"
                    value="pr"
                  />
                  <label class="form-check-label" for="inlineCheckbox2"
                    >Perempuan</label
                  >
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <label for="inputDate4" class="form-label"
                >Tanggal Lahir</label
              >
              <input type="date" name="tanggal_lahir" class="form-control" id="inputDate4" />
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