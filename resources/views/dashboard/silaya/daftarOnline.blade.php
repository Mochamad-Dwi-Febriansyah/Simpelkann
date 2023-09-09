@extends('layouts.header-footer')

@section('content')
{{-- daftar online --}}
<section class="daftar-online">
    <div class="container">
      <h5 class="fw-500 mb-3">DAFTAR ONLINE SI LAYA</h5>
      <!-- <span>silahkan isi form ini sesuai data yang anda miliki</span> -->
      <div class="card">
        <div class="card-header">
          <h6 class="card-title">
            Silahkan isi form ini sesuai data yang anda miliki
          </h6>
        </div>
        <div class="card-body">
          <form class="row g-3">
            <div class="col-md-12">
              <div class="col-md-12">
                <h6 class="text-danger">
                  * Nomor Rekap Medis diisi dengan nomor ibu pasien yang
                  tertera pada kartu kontrol
                </h6>
              </div>
              <label for="inputEmail4" class="form-label">Nomor Rekap Medis</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">Nama Anak</label>
              <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
              <label for="inputAddress" class="form-label">Nama Ibu</label>
              <input type="text" class="form-control" id="inputAddress">
            </div>
            <div class="col-md-6">
              <label for="inputDate4" class="form-label">Jenis Kelamin</label>
              <div class="form-control border-0">
                <div class="form-check-inline">
                  <input class="form-check-input" name="jk" type="radio" id="inlineCheckbox1" value="laki">
                  <label class="form-check-label" for="inlineCheckbox1">Laki-Laki</label>
                </div>
                <div class="form-check-inline">
                  <input class="form-check-input" name="jk" type="radio" id="inlineCheckbox2" value="pr">
                  <label class="form-check-label" for="inlineCheckbox2">Perempuan</label>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <label for="inputDate4" class="form-label">Tanggal Lahir</label>
              <input type="date" class="form-control" id="inputDate4">
            </div>
            <div class="col-md-6">
              <label for="inputState" class="form-label">Pilih Posyandu</label>
              <select id="inputState" class="form-select">
                <option selected="">Klinik Sehat Selalu</option>
                <option selected="">Klinik Berobat</option>
                <option selected="">Klinik Seger Waras</option>
              </select>
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