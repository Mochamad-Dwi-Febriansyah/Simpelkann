@extends('layouts.header-footer')

@section('content')
{{-- manage user --}}
<section class="daftar-online">
    <div class="container">
      <div class="d-flex gap-4">
        <a href="{{ route('getKlinik') }}"><h5 class="fw-500 mb-3  {{ request()->is('getklinik') ? 'text-info' : 'text-secondary'}}">DAFTAR KLINIK</h5></a> 
        <a href="{{ route('addKlinik') }}"><div class=" bg-primary px-2 rounded-1">Tambah Klinik</div></a> 
      </div>
      <!-- <span>silahkan isi form ini sesuai data yang anda miliki</span> -->
      <table class="table">
        <thead class="table-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Klinik</th>
            <th scope="col">Alamat</th> 
            <th scope="col">Region</th> 
          </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($klinik as $list)
          <tr>
            <th>{{ $no++ }}</th>
            <td>{{ $list->nama_klinik }}</td>
            <td>{{ $list->alamat }}</td> 
            <td>{{ $list->regional?->Kecataman }}&nbsp {{ $list->regional?->kabupaten }}</td> 
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</section>
{{-- end manage user --}}
@endsection