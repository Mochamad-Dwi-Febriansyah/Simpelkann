@extends('layouts.header-footer')

@section('content')
{{-- manage user --}}
<section class="daftar-online">
    <div class="container">
        <h5 class="fw-500 mb-3">TAMBAH DATA MEDIS</h5>
        <!-- <span>silahkan isi form ini sesuai data yang anda miliki</span> -->
        <div class="card">
          <div class="card-header">
            <h6 class="card-title">
              Silahkan isi form ini sesuai data yang anda miliki
            </h6>
          </div>
          <div class="card-body">
            <form class="row g-3" action="{{ route('addKlinikProccess') }}" method="POST">
              @csrf 
              <div class="col-md-6">
                <label for="inputAddress" class="form-label">Nama</label>
                <input type="text" name="nama_klinik" class="form-control" id="inputAddress" />
              </div>
              <div class="col-md-6">
                <label for="inputAddress" class="form-label">Alamat</label>
                <input type="text" name="alamat" class="form-control" id="inputAddress" />
              </div>
              <div class="col-md-6">
                <label for="inputState" class="form-label">Pilih Klinik</label>
                <select name="regional_id" id="" class="form-select">
                  @foreach($region as $list)
                  <option value={{ $list->id }}>{{ $list->kecamatan }} {{ $list->kabupaten }} </option>
                  @endforeach
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
{{-- end manage user --}}
@endsection