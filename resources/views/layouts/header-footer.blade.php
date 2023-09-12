<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <!-- my css -->
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}" />
    <title>SIMPELKAN</title>
  </head>
  <body class="d-flex flex-column">
    <div class="aut">  
    <!-- navbar --> 
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
      <div class="container">
        <a class="navbar-brand" href="#"
        ><img src="{{ asset('assets/img/Logo SIMPELKAN(2).png') }}" style="width: 48px"
      /></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul
            class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll w-100"
            style="--bs-scroll-height: 100px"
          >
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="{{ route('dashboard') }}">Beranda</a>
            </li> 
@if (!auth()->user()->role)
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Daftar Cepat
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="{{ route('daftarSisandu') }}">Si Sandu</a></li>
                <li><a class="dropdown-item" href="{{ route('daftarSilaya') }}">Si Laya</a></li> 
              </ul>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{ route('cekdatapendaftaran') }}">Cek Data Pendaftaran</a>
            </li> 
@endif
            {{-- <li class="nav-item">
              <a class="nav-link" href="datapendaftaran.html">Daftar Klinik</a> <!--(kabupaten demak)-->
            </li> --}}
            @if (auth()->user()->role == 'admin')
            <li class="nav-item">
              <a class="nav-link" href="{{ route('getUser') }}">Kelola User</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{ route('getKlinik') }}">Kelola Klinik</a>
            </li> 
            <li class="nav-item">
              <a class="nav-link" href="{{ route('getBerita') }}">Kelola Berita</a>
            </li> 
            @endif
            @if (auth()->user()->role == 'doctor')
            <li class="nav-item">
              <a class="nav-link" href="{{ route('getPendaftaranImunisasi') }}">Data Pendaftaran</a>
            </li>  
            @endif
          </ul>
          <div class="d-flex gap-3">
            <span class="my-auto"><a href="{{ route('getprofil') }}" class="text-secondary py-0">{{ auth()->user()->username }}</a></span>
            <span class="my-auto">|</span>
            <a href="{{ route('logout') }}"> 
                <button type="button" class="btn btn-sm hijau-pastel fw-bold">
                    Logout
              </button>
            </a>
             
          </div>
        </div>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <img src="assets/img/Logo SIMPELKAN(2).png" style="width: 48px"
      />
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a class="nav-link" href="{{ route('dashboard') }}">Beranda</a>
              </li> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Daftar Cepat
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="{{ route('daftarSisandu') }}">Si Sandu</a></li>
                  <li><a class="dropdown-item" href="{{ route('daftarSilaya') }}">Si Laya</a></li> 
                </ul>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="datapendaftaran.html">Cek Data Pendaftaran</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="datapendaftaran.html">Daftar Klinik</a> <!--(kabupaten demak)-->
              </li>
            </ul> 
          </div>
        </div>
      </div>
    </nav>
    <!-- endnavbar -->

    @yield('content')

</div>
<!-- footer -->
  <section class="footer">
      <div class="top">
          <div class="container border-bottom">
              <div class="row d-flex flex-wrap gap-4 pb-3" > 
                    <div class="col">
                        <h5 class="fw-500 mb-3 text-white">Si Sandu</h5>
                        <ul class="list-group lh-lg">
                          <li class="list-group"><a href="" class="hover-santai">Daftar Online</a></li>
                          <li class="list-group" ><a href="" class="hover-santai">Jadwal Imunisasi</a></li>
                          <li class="list-group"><a href="" class="hover-santai">Cek Riwayat</a></li>
                          <li class="list-group"><a href="" class="hover-santai">Cek Antrian</a></li>
                        </ul>
                    </div>  
                    <div class="col">
                      <h5 class="fw-500 mb-3 text-white">Si Laya</h5>
                      <ul class="list-group lh-lg">
                        <li class="list-group"><a href="" class="hover-santai" class="hover-santai">Daftar Online</a></li>
                        <li class="list-group"><a href="" class="hover-santai">Cek Klinik Terdekat</a></li>
                        <li class="list-group"><a href="" class="hover-santai">Rekomendasi Dokter</a></li>
                        <li class="list-group"><a href="" class="hover-santai">Cek Antrian</a></li>
                      </ul>
                     </div>  
                    <div class="col">
                      <h5 class="fw-500 mb-3 text-white">Temukan Kami</h5>
                      <table>
                          <tbody>
                              <tr>
                                  <td><img src="assets/img/whatsapp.png" alt="" class="img-2r"></td>
                                  <td><img src="assets/img/instagram.png" alt="" class="img-2r"></td>
                                  <td><img src="assets/img/youtube.png" alt="" class="img-2r"></td>
                                  <td><img src="assets/img/globe.png" alt="" class="img-2r"></td> 
                              </tr>
                          </tbody>
                      </table>
                    </div>  
              </div>  
           </div> 
               
      </div>
      <div class="bottom  text-center">
          <div class="container">
              <span class="text-center"><a href="" class="hover-santai">SimpelkanCopyright©2023-now</a></span>
          </div>

      </div>
  </section>
  <!-- footer -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></script>

  <!-- my js -->
  <script src="assets/js/script.js"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  -->
</body>
</html>