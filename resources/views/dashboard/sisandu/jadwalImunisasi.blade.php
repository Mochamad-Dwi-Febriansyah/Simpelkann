@extends('layouts.header-footer')

@section('content')
{{-- jadwal imunisasi --}}
<section class="cek-jadwal">
    <div class="container">
      <h5 class="fw-500  mb-3">CEK JADWAL SI SANDU</h5>
      <div class="col mb-5">
        <h5 class="fw-bolder">Klinik Sehat Selalu</h5>
        <table class="table">
          <tbody>
            <tr>
              <td>Hari SENIN - JUMAT</td>
              <td>Buka 08:00 - 16:00 WIB</td>
            </tr>
            <tr>
              <td>Hari Sabtu</td>
              <td>Buka 08:00 - 12:00 WIB</td>
            </tr>
          </tbody>
        </table>
      </div>
      <h5 class="fw-500  mb-3">JADWAL IMUNISASI</h5>
      @if(auth()->user()->role == 'doctor' )
      <a class="bg-primary px-2 float-end rounded-1" href="{{ route('addJadwalImunisasi') }}">Tambah Jadwal Imunisasi</a>
      @endif
@foreach($jadwal_imunisasi as $list)
      <div class="col mb-3">
        <h5 class="fw-bolder">Bulan {{ $list->bulan }}</h5>
        <table class="table">
          <tbody>
            <tr>
              <td>{{ $list->nama_imunisasi }}</td>
            </tr>
          </tbody>
        </table>
      </div>
@endforeach
    </div>
</section>
{{-- jadwal imunisasi --}}
@endsection