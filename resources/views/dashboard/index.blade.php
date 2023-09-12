@extends('layouts.header-footer')
@section('content')
 <!-- hero section -->
    <section class="hero-banner mb-3">
      <div class="back-biru-pastel">
        <div class="container">
          <h1 class="fw-bold white">
            CEPAT, TEPAT, <br />KEPERCAYAAN MASYARAKAT
          </h1>
        </div>
      </div>
    </section>
    <!-- end hero section -->

    <!-- pelayanan Simpelkan -->
    <section class="menu-pelayanan mb-3">
      <div class="container">
        <h5 class="fw-500 mb-3">PELAYANAN SIMPELKAN</h5>
        <div class="row row-cols-2 row-cols-md-4 row-cols-lg-5 g-4">
          <div class="col">
            <div class="card p-3">
              <img
                src="{{ asset('assets/img/ikon_yandu.png') }}" 
                class="card-img-top"
                alt="..." style="width: 134px;height: 137px"
              /> {{-- 128px --}}
              <div class="card-body">
                <div class="d-grid">
                  <!-- <button class="btn back-biru-pastel" type="button">
                    SI Sandu
                  </button> -->
                  <button
                  class="btn back-biru-pastel"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#siSanduScroll"
                  aria-controls="navbarScroll"
                  aria-expanded="false"
                  aria-label="Toggle navigation"
                >
                SI Sandu
                </button>
                <div class="collapse navbar-collapse mt-4" id="siSanduScroll">
                    <ul
                      class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll w-100"
                    >
                      <li class="nav-item hover-back">
                        <a class="nav-link hitam-666" href="{{ route('daftarSisandu') }}">Daftar Online</a>
                      </li>
                      <li class="nav-item  hover-back">
                        <a class="nav-link hitam-666" href="{{ route('jadwalImunisasi') }}">Jadwal Imunisasi</a>
                      </li> 
                      <li class="nav-item  hover-back">
                        <a class="nav-link hitam-666" href="#">Cek Riwayat</a>
                      </li> 
                      <li class="nav-item  hover-back">
                        <a class="nav-link hitam-666" href="cekantrian.html">Cek Antrian</a>
                      </li>  
                    </ul> 
                  </div> 
                </div>
              </div>
            </div>
             
          </div>
          <div class="col">
            <div class="card  p-3">
              <img
                src="{{ asset('assets/img/ikon_cekkes.png') }}"
                class="card-img-top"
                alt="..." style="width: 134px;height: 137px"
              />
              <div class="card-body">
                <div class="d-grid">
                    <button
                    class="btn back-biru-pastel"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#siLayaScroll"
                    aria-controls="navbarScroll"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                  SI Laya
                  </button>
                  <div class="collapse navbar-collapse  mt-4" id="siLayaScroll">
                      <ul
                        class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll w-100" 
                      >
                        <li class="nav-item  hover-back">
                          <a class="nav-link hitam-666" href="#">Daftar Online</a>
                        </li>
                        <li class="nav-item  hover-back">
                          <a class="nav-link hitam-666" href="#">Cek Klinik Terdekat</a>
                        </li> 
                        <li class="nav-item  hover-back">
                          <a class="nav-link hitam-666" href="#">Rekomendasi Dokter</a>
                        </li> 
                        <li class="nav-item  hover-back">
                          <a class="nav-link hitam-666" href="cekantrian.html">Cek Antrian</a>
                        </li> 
                      </ul> 
                    </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card  p-3">
              <img
                src="{{ asset('assets/img/ikon_konsultasi.png') }}"
                class="card-img-top"
                alt="..." style="width: 134px;height: 137px"
              />
              <div class="card-body">
                <div class="d-grid">
                  <button class="btn back-biru-pastel" type="button">
                    Chat Dokter
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end pelayanan Simpelkan -->

    <!-- lainnya -->
    <section class="menu-lainnya mb-3">
      <div class="container">
        <h5 class="fw-500 mb-3">Lainnya</h5>
        <div class="row row-cols-4  g-4">
          <div class="col width-card-120px">
            <div class="card h-100 border-0 bg-transparent">
              <img
                src="{{ asset('assets/img/ikon_cardok.png') }}"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <div class="d-grid">
                  <a href="" class="hitam-666 text-decoration-none fw-400 fs-08"
                    >Cek Badan Ideal</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col width-card-120px">
            <div class="card h-100 border-0 bg-transparent">
              <img
                src="{{ asset('assets/img/healthcare.png') }}"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <div class="d-grid">
                  <a href="" class="hitam-666 text-decoration-none fw-400 fs-08"
                    >Tips Hidup Sehat</a
                  >
                </div>
              </div>
            </div>
          </div>
          <div class="col width-card-120px">
            <div class="card h-100 border-0 bg-transparent">
              <img
                src="{{ asset('assets/img/hospital.png') }}"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <div class="d-grid">
                  <a href="" class="hitam-666 text-decoration-none fw-400 fs-08"
                    >Layanan Khusus</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end lainnya -->

    <!-- seputar kesehatan -->
    <section class="seputar-kesehatan mb-3">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h5 class="fw-500">SEPUTAR KESEHATAN</h5>
          <a href="" class="text-decoration-none">Lihat Semua</a>
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 g-4 scroll-samping">

@foreach($berita as $list)
          <div class="col">
            <div class="card h-100">
              <img src="/image/{{ $list->gambar_berita }}" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title">{{ $list->judul_berita }}</h5>
                <p class="card-text">{{ $list->isi_berita }}</p>
              </div>
            </div>
          </div> 
@endforeach

        </div>
      </div>
    </section>
    <!-- end seputar kesehatan -->

    <!-- dokter terbaik -->
    <section class="rating mb-3">
        <div class="container table-responsive">
            <h5 class="fw-500 mb-3">Daftar 10 Dokter Terbaik</h5>
            <table class="table"> 
                <tbody>
                  <tr>
                    <td>1</td>
                    <td>Dr Okta Msi</td>
                    <td>Semarang</td>
                    <td><img src="assets/img/status_paripurna.png"></td>
                  </tr> 
                  <tr>
                    <td>2</td>
                    <td>Dr Alex</td>
                    <td>Demak</td>
                    <td><img src="assets/img/status_paripurna.png"></td>
                  </tr> 
                  <tr>
                    <td>3</td>
                    <td>Dr Okta Msi</td>
                    <td>Semarang</td>
                    <td><img src="assets/img/status_paripurna.png"></td>
                  </tr> 
                  <tr>
                    <td>4</td>
                    <td>Dr Okta Msi</td>
                    <td>Semarang</td>
                    <td><img src="assets/img/status_paripurna.png"></td>
                  </tr> 
                </tbody>
              </table>
        </div>
    </section>
    <!-- end dokter terbaik -->
@endsection

