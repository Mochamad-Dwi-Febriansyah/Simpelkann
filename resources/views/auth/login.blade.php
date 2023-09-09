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

    <title>SIMPELKAN</title>
    <link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}" />
  </head>
  <body>

      
      <div class="form-login">
        <div class="tengah-absolute ale">
            @if(session('register_success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <span><strong>Selamat, </strong>{{ session('register_success') }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            @error('login_error')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <span><strong>Maaf, </strong>{{ $message }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror
            @error('logout_success')
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <span><strong>Terima Kasih, </strong>{{ $message }}</span>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @enderror
        </div>
          <div class="tengah-absolute">
        <div class="container"> 
            <div class="d-flex justify-content-center mb-5 gap-2">
                <img src="{!! asset('assets/img/Logo SIMPELKAN(2).png') !!}" alt="" style="width: 100px;">
                <h2 class="my-auto">LOGIN</h2>
            </div>
              <form  style="width: 300px;" action="{{ route('loginProcess') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label"
                    >Username</label
                  >
                  <input
                    type="username"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    name="username"
                  />  
                  @error('username')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label"
                    >Password</label
                  >
                  <input
                    type="password"
                    class="form-control"
                    id="exampleInputPassword1"
                    name="password"
                  />
                  @error('password')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div> 
                <div class="mb-3">
                    <label for=""><a href="{{ route('register') }}" class="color-biru-pastel">register now</a></label>
                </div>
                <button type="submit" class="btn backg-biru-pastel">Login</button>
              </form>
            </div> 
      </div>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
