<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html" target="_blank">
            <img src="{{ asset('template/argon-dashboard-master/assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold">Argon Dashboard 2</span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="{{ url('dashboard') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-7">Menu Website</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('portal') ? 'active' : '' }}" href="{{ url('portal') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Portal</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('partners') ? 'active' : '' }}" href="{{ url('partners') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-diamond text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Partner</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('news') ? 'active' : '' }}" href="{{ url('news') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-ruler-pencil text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Berita</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('testimoni') ? 'active' : '' }}" href="{{ url('testimoni') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Testimoni</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('publikasi') ? 'active' : '' }}" href="{{ url('publikasi') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-camera-compact text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Publikasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('profile_dinas') ? 'active' : '' }}" href="{{ url('profile_dinas') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Profile Dinas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('program_kerja') ? 'active' : '' }}" href="{{ url('program_kerja') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Program Kerja</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('layanan') ? 'active' : '' }}" href="{{ url('layanan') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Layanan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('tugas_dinas') ? 'active' : '' }}" href="{{ url('tugas_dinas') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Tugas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('fungsi') ? 'active' : '' }}" href="{{ url('fungsi') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-app text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Data Fungsi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('contact') }}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="ni ni-collection text-info text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Contact</span>
                </a>
            </li>
            
        </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
        <div class="card card-plain shadow-none" id="sidenavCard">
            <img class="w-50 mx-auto" src="{{ asset('template/argon-dashboard-master/assets/img/illustrations/icon-documentation.svg') }}" alt="sidebar_illustration">
            <div class="card-body text-center p-3 w-100 pt-0">
                <div class="docs-info">
                    <h6 class="mb-0">Need help?</h6>
                    <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
                </div>
            </div>
        </div>
        <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
        <a class="btn btn-primary btn-sm mb-0 w-100" href="https://www.creative-tim.com/product/argon-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a>
    </div>
</aside>
