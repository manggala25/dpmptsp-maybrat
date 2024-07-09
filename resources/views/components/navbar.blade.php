    <!-- Navigation Bar-->
    <header id="topnav" class="defaultscroll scroll-active">

        <!-- Tagline Start -->
        <div class="tagline">
            <div class="container">
                <div class="float-start">
                    @foreach($contact as $item)
                        @if ($item->nama_informasi == 'Whatsapp')
                            <div class="phone">
                                <a href="{{ $item->link }}" style="text-decoration: none; color: inherit;">
                                  <i class="mdi mdi-whatsapp"></i> {{ $item->detail }}
                                </a>
                            </div>
                        @elseif ($item->nama_informasi == 'E-mail')
                            <div class="email">
                                <a href="{{ $item->link }}" >
                                    <i class="mdi mdi-email"></i> {{ $item->detail }}
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- Tagline End -->

        <!-- Menu Start -->
        <div class="container">
            <!-- Logo container-->
            <div>
                <a href="#" class="logo">
                    <img src="{{ asset('storage/images/logo-maybrat.png') }}" alt="" class="logo-light" height="28" />
                    <img src="{{ asset('storage/images/logo-maybrat-dark.png') }}" alt="" class="logo-dark" height="28" />
                </a>
            </div>                 
           <!--end login button-->
            <!-- End Logo container-->
            <div class="menu-extras">
                <div class="menu-item">
                    <!-- Mobile menu toggle-->
                    <a class="navbar-toggle">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                    <!-- End mobile menu toggle-->
                </div>
            </div>
    
            <div id="navigation">
            <!-- Navigation Menu-->   
                <ul class="navigation-menu">
                    <li class="{{ Request::is('') ? 'active' : '' }}">
                        <a href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="{{ Request::is('profil') ? 'active' : '' }}">
                        <a href="{{ url('/profil') }}">Profil</a>
                    </li>
                    <li class="has-submenu {{ Request::is('layanan*') ? 'active' : '' }}">
                        <a href="javascript:void(0)">Layanan</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li class="has-submenu {{ Request::is('layanan/standar-pelayanan*') ? 'active' : '' }}">
                                <a href="javascript:void(0)">Standar Pelayanan</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li class="{{ Request::is('layanan/standar-pelayanan/biaya') ? 'active' : '' }}"><a href="{{ url('/layanan/standar-pelayanan/biaya') }}">Standar biaya pelayanan</a></li>
                                    <li class="{{ Request::is('layanan/standar-pelayanan/persyaratan') ? 'active' : '' }}"><a href="{{ url('/layanan/standar-pelayanan/persyaratan') }}">Persyaratan</a></li>
                                    <li class="{{ Request::is('layanan/standar-pelayanan/waktu') ? 'active' : '' }}"><a href="{{ url('/layanan/standar-pelayanan/waktu') }}">Standar waktu pelayanan</a></li>
                                    <li class="{{ Request::is('layanan/standar-pelayanan/prosedur') ? 'active' : '' }}"><a href="{{ url('/layanan/standar-pelayanan/prosedur') }}">Prosedur</a></li>
                                </ul>  
                            </li>
                            <li class="has-submenu {{ Request::is('layanan/informasi-publik*') ? 'active' : '' }}">
                                <a href="javascript:void(0)">Informasi Publik</a><span class="submenu-arrow"></span>
                                <ul class="submenu">
                                    <li class="{{ Request::is('layanan/informasi-publik/permintaan') ? 'active' : '' }}"><a href="{{ url('/layanan/informasi-publik/permintaan') }}">Permintaan informasi publik</a></li>
                                    <li class="{{ Request::is('layanan/informasi-publik/formulir') ? 'active' : '' }}"><a href="{{ url('/layanan/informasi-publik/formulir') }}">Formulir informasi dan layanan publik</a></li>
                                    <li class="{{ Request::is('layanan/informasi-publik/izin-kesehatan') ? 'active' : '' }}"><a href="{{ url('/layanan/informasi-publik/izin-kesehatan') }}">Formulir izin kesehatan</a></li>
                                </ul>  
                            </li>
                        </ul>
                    </li>
                    <li class="{{ Request::is('artikel') ? 'active' : '' }}">
                        <a href="{{ url('/artikel') }}">Artikel</a>
                    </li>
                    <li class="{{ Request::is('kontak') ? 'active' : '' }}">
                        <a href="{{ url('/kontak') }}">Kontak</a>
                    </li>
                </ul><!--end navigation menu-->
            </div><!--end navigation-->
        </div><!--end container-->
        <!--end end-->
    </header><!--end header-->
    <!-- Navbar End -->