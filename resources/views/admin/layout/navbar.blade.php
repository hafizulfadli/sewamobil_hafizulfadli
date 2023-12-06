<main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">@yield('title')</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">@yield('title')</h6>
        </nav>
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item d-flex align-items-center mr-3">
                <a href="" class="nav-link text-white font-weight-bold px-0">
                    <i class="fa fa-user me-sm-1"></i>
                    <span class="d-sm-inline d-none">{{ Auth::user()->name }}</span>
                </a>
                <p> &nbsp;&nbsp;</p>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="{{ route('logout') }}" class="nav-link text-white font-weight-bold px-0">
                        <i class="fa fa-sign-out me-sm-1 ml-3"></i>
                        <span class="d-sm-inline d-none">Logout</span>
                    </a>
                </form>
            </li>
        </ul>
        </div>
      </div>
    </nav>
