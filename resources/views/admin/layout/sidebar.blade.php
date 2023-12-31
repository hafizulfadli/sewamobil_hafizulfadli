
<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
      <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="">
          <img src="{{asset('assets')}}/img/car.png" class="navbar-brand-img h-100" alt="main_logo">
          <span class="ms-1 font-weight-bold">SEWA MOBIL</span>
        </a>
      </div>
      <hr class="horizontal dark mt-0">
      {{-- <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main"> --}}
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" href="{{ route('home') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Dashboard</span>
            </a>
          </li>
          @if(auth()->user()->level == 'admin')
          <li class="nav-item">
            <a class="nav-link {{ Request::is('mobil') ? 'active' : '' }}  " href="/mobil">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-car text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Mobil</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('pengguna') ? 'active' : '' }}  " href="{{ route('pengguna') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-users text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Penggguna</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('peminjaman') ? 'active' : '' }}  " href="/peminjaman">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-car text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Peminjaman</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('pengembalian') ? 'active' : '' }}  " href="/pengembalian">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-car text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Pengembalian</span>
            </a>
          </li>
          @endif
          @if(auth()->user()->level == 'pengguna')
          <li class="nav-item">
            <a class="nav-link {{ Request::is('peminjaman.create') ? 'active' : '' }}  " href="{{ route('peminjaman.create') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-car text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Sewa Mobil</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('peminjaman') ? 'active' : '' }}  " href="/peminjaman">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="fas fa-car text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Peminjaman</span>
            </a>
          </li>
          @endif

        </ul>
      </div>
    </aside>
