<!--
=========================================================
* Argon Dashboard 2 - v2.0.4
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/car.png') }}">
  <title>
    Register
  </title>
   <!--     Fonts and icons     -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
   <!-- Nucleo Icons -->
   <link href="{{asset('assets')}}/css/nucleo-icons.css" rel="stylesheet" />
   <link href="{{asset('assets')}}/css/nucleo-svg.css" rel="stylesheet" />
   <!-- Font Awesome Icons -->
   <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
   <link href="{{asset('assets')}}/css/nucleo-svg.css" rel="stylesheet" />
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

   <!-- CSS Files -->
   <link id="pagestyle" href="{{asset('assets')}}/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
   <link id="pagestyle" href="{{asset('assets')}}/vendor/datatables/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
   {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> --}}
   <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
   <script src="//cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>


 </head>

<body class="">
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('https://source.unsplash.com/1020x600?cars'); background-position: top;">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 text-center mx-auto">
            <h1 class="text-white mb-2 mt-5">Welcome!</h1>
            <p class="text-lead text-white">Website Sewa Mobil</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row mt-lg-n10 mt-md-n11 mt-n10 justify-content-center">
        <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
          <div class="card z-index-0">
            <div class="card-header text-center pt-4">
              <h5>Registrasi</h5>
            </div>
            <div class="card-body">
              <form role="form" method="POST" action="{{ route('insert') }}" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                  <input type="text" name="name" class="form-control" placeholder="Nama" aria-label="Name">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" name="alamat" placeholder="Alamat" aria-label="Name">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" name="nohp" placeholder="Nohp" aria-label="Name">
                </div>
                <div class="mb-3">
                  <input type="text" class="form-control" name="nosim" placeholder="no sim" aria-label="Name">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control" name="password" placeholder="Password" aria-label="Password">
                </div>
                <div class="text-center">
                  <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Registrasi</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <hr class="mb-3">
    @include("admin.layout.footer")
</body>

</html>
