@extends('layouts.header-footer')

@section('content')
{{-- manage user --}}
<section class="daftar-online">
    <div class="container">
      <div class="d-flex gap-4">
        <a href="{{ route('getUser') }}"><h5 class="fw-500 mb-3  {{ request()->is('getuser') ? 'text-info' : 'text-secondary'}}">DAFTAR USER</h5></a>
        <a href="{{ route('getMedis') }}"><h5 class="fw-500 mb-3  {{ request()->is('getmedis') ? 'text-info' : 'text-secondary'}}">DAFTAR MEDIS</h5></a>
        <a href="{{ route('addMedis') }}"><div class=" bg-primary px-2 rounded-1">Tambah Medis</div></a> 
      </div>
      <!-- <span>silahkan isi form ini sesuai data yang anda miliki</span> -->
      <table class="table">
        <thead class="table-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Username</th>
            <th scope="col">Name</th> 
            <th scope="col">Klinik</th> 
            <th scope="col">Alamat Klinik</th> 
            <th scope="col">Role</th> 
          </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($medis as $list)
          <tr>
            <th>{{ $no++ }}</th>
            <td>{{ $list->medis->username }}</td>
            <td>{{ $list->name }}</td> 
            <td>{{ $list->klinik->nama_klinik }}</td> 
            <td>{{ $list->klinik->alamat }}</td> 
            <td>{{ $list->medis->role }}</td> 
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</section>
{{-- end manage user --}}
@endsection