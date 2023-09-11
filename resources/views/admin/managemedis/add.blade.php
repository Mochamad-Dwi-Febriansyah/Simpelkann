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
            <form class="row g-3" action="{{ route('addMedisProccess') }}" method="POST">
              @csrf
              <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">Username</label>
                <input type="text"  name="username" class="form-control" id="inputEmail4" />
              </div>
              <div class="col-md-6">
                <label for="inputAddress" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="inputAddress" />
              </div>
              <div class="col-md-6">
                <label for="inputAddress" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="inputAddress" />
              </div>
              <div class="col-md-6">
                <label for="inputState" class="form-label">Pilih Klinik</label>
                <select name="klinik_id" id="" class="form-select">
                  @foreach($klinik as $list)
                  <option value={{ $list->id }}>{{ $list->nama_klinik }}</option>
                  @endforeach
                </select>
              </div>
              <div class="col-md-6">
                <label for="inputDate4" class="form-label"
                  >Role</label
                >
                <select name="role" id="" class="form-select">
                    <option value="admin">Admin</option>
                    <option value="doctor">Doctor</option>
                    <option value="resepsionist">Resepsionist</option>
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