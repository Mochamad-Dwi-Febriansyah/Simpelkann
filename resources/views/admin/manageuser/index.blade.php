@extends('layouts.header-footer')

@section('content')
{{-- manage user --}}   
<section class="daftar-online">
    <div class="container">
      <div class="d-flex gap-4">
        <a href="{{ route('getUser') }}"><h5 class="fw-500 mb-3  {{ request()->is('getuser') ? 'text-info' : 'text-secondary'}}">DAFTAR USER</h5></a>
        <a href="{{ route('getMedis') }}"><h5 class="fw-500 mb-3  {{ request()->is('getmedis') ? 'text-info' : 'text-secondary'}}">DAFTAR MEDIS</h5></a> 
      </div>
      <!-- <span>silahkan isi form ini sesuai data yang anda miliki</span> -->
      <table class="table">
        <thead class="table-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Username</th>
            <th scope="col">Tanggal Lahir</th>
            <th scope="col">Alamat</th>
            <th scope="col">Region</th>
          </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($user as $list)
          <tr>
            <th>{{ $no++ }}</th>
            <td>{{ $list->username }}</td>
            <td>{{ $list->alamat }}</td>
            <td>{{ $list->tanggal_lahir }}</td> 
            <td>{{ $list->regional?->Kecataman }}&nbsp {{ $list->regional?->kabupaten }}</td> 
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</section>
{{-- end manage user --}}
@endsection