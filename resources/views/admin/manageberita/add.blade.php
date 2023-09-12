@extends('layouts.header-footer')

@section('content')
{{-- manage user --}}
<section class="daftar-online">
    <div class="container">
        <h5 class="fw-500 mb-3">TAMBAH DATA BERITA</h5>
        <!-- <span>silahkan isi form ini sesuai data yang anda miliki</span> -->
        <div class="card">
          <div class="card-header">
            <h6 class="card-title">
              Silahkan isi form ini dengan bijak
            </h6>
          </div>
          <div class="card-body">
            <form class="row g-3" action="{{ route('addBeritaProccess') }}" method="POST" enctype="multipart/form-data">
              @csrf 
              <div class="col-md-6">
                <label for="inputAddress" class="form-label">Judul Berita</label>
                <input type="text" name="judul_berita" class="form-control" id="inputAddress" />
              </div>
              <div class="col-md-6">
                <label for="inputAddress" class="form-label">Gambar Berita</label>
                <input type="file" name="gambar_berita" class="form-control" id="inputAddress" />
              </div> 
              <div class="col-md-12">
                <label for="inputAddress" class="form-label">Isi Berita</label> 
                <textarea name="isi_berita" class="form-control" id="inputAddress" cols="30" rows="10"></textarea>
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