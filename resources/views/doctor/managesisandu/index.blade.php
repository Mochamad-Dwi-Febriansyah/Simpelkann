@extends('layouts.header-footer')

@section('content')
{{-- manage user --}}
<section class="daftar-online">
    <div class="container">
      <div class="d-flex gap-4">
        <a href="{{ route('getKlinik') }}"><h5 class="fw-500 mb-3  {{ request()->is('getklinik') ? 'text-info' : 'text-secondary'}}">DAFTAR PENDAFTARAN</h5></a> 
        {{-- <a href="{{ route('addKlinik') }}"><div class=" bg-primary px-2 rounded-1">Tambah Klinik</div></a>  --}}
      </div>
      <!-- <span>silahkan isi form ini sesuai data yang anda miliki</span> -->
      <table class="table">
        <thead class="table-light">
          <tr>
            <th scope="col">No</th>
            <th scope="col">No Antrian</th>
            <th scope="col">Kode Akses Anak</th>
            <th scope="col">Tanggal Imunisasi</th>
            <th scope="col">Nama Anak</th>
            <th scope="col">Tanggal Lahir</th> 
            <th scope="col">Jenis Kelamin</th> 
          </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($imunisasi as $list)
          <tr>
            <th>{{ $no++ }}</th>
            <th></th>
            <td>{{ $list->child_users->kode_akses_anak }}</td>
            <td>{{ $list->tanggal }}</td>
            <td>{{ $list->child_users->nama }}</td>
            <td>{{ $list->child_users->tanggal_lahir}}</td> 
            <td>
                @if($list->child_users->jenis_kelamin == 'lk')
                    Laki-laki
                @endif 
                @if($list->child_users->jenis_kelamin == 'pr')
                    Perempuan
                @endif 
            </td> 
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</section>
{{-- end manage user --}}
@endsection