@extends('layouts.header-footer')

@section('content')
{{-- manage user --}}
<section class="daftar-online">
    <div class="container">
      <div class="d-flex gap-4">
        <a href="{{ route('getBerita') }}"><h5 class="fw-500 mb-3  {{ request()->is('getBerita') ? 'text-info' : 'text-secondary'}}">DAFTAR BERITA</h5></a> 
        <a href="{{ route('addBerita') }}"><div class=" bg-primary px-2 rounded-1">Tambah Berita</div></a> 
      </div>
      <!-- <span>silahkan isi form ini sesuai data yang anda miliki</span> -->
      <table class="table">
        <thead class="table-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Judul Berita</th>
            <th scope="col">Isi Berita</th> 
            <th scope="col">Gambar Berita</th> 
            <th scope="col">Aksi</th> 
          </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($berita as $list)
          <tr>
            <th>{{ $no++ }}</th>
            <td>{{ $list->judul_berita }}</td>
            <td>{{ $list->isi_berita }}</td> 
            <td><img src="/image/{{ $list->gambar_berita }}" alt="" width="100px"></td> 
            <td class="">
                <div class="d-flex">
                    <button type="button" class="btn btn-warning">Edit</button>
                    <form  onsubmit="return confirm('Apakah Anda Yakin ?')" action="{{ route('deleteBerita',$list->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Hapus</button>
                    </form>
                </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</section>
{{-- end manage user --}}
@endsection