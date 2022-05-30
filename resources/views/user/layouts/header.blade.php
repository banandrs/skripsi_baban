<!-- Navigation -->
<!-- <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid"> -->
<!-- Brand and toggle get grouped for better mobile display -->
<!-- <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">Sinema Untan</a>
            </div> -->

<!-- Collect the nav links, forms, and other content for toggling -->
<!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="/">Beranda</a>
                    </li>
                    <li>
                        <a href="paket_foto">Paket</a>
                    </li>
                    <li>
                        <a href="promo">Promo</a>
                    </li>
                    <li>
                        <a href="pendaftaran">Pendaftaran</a>
                    </li>
                    <li>
                        <a href="project">Project</a>
                    </li>
                     <li>
                        <a href="project">Tentang</a>
                    </li>
                    <li>
                        <a href="kontak">Kontak</a>
                    </li>
                    <li>
@if(Auth::guest())
                            <a href="{{ route('login') }}">Login</a>
@else
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
@endif
                    </li>
                </ul>
            </div> -->
<!-- /.navbar-collapse -->
<!-- </div> -->
<!-- /.container -->
<!-- </nav> -->

<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<!-- <header class="intro-header" style="background-image: url(@yield('bg-img'))">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>@yield('title')</h1>
                        <hr class="small">
                        <span class="subheading">@yield('sub-heading')</span>
                    </div>
                </div>
            </div>
        </div>
    </header> -->

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('user.home') }}">Sinema
            Untan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->routeIs('user.home') ? 'active' : '' }}"><a href="{{ route('user.home') }}" class="nav-link">Beranda</a></li>
                <li class="nav-item {{ request()->routeIs('user.paket-foto') ? 'active' : '' }}"><a href="{{ route('user.paket-foto') }}" class="nav-link">Paket
                        Foto</a></li>
                <li class="nav-item {{ request()->routeIs('user.galeri') ? 'active' : '' }}"><a href="{{ route('user.galeri') }}" class="nav-link">Galeri</a></li>
                <li class="nav-item {{ request()->routeIs('user.testimoni') ? 'active' : '' }}"><a href="{{ route('user.testimoni') }}" class="nav-link">Testimoni</a></li>
                <li class="nav-item {{ request()->routeIs('user.tentang') ? 'active' : '' }}"><a href="{{ route('user.tentang') }}"><a href="{{ route('user.tentang') }}" class="nav-link">Tentang</a></li>
            </ul>
        </div>
    </div>
</nav>