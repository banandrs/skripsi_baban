@extends('user/app')
@section('bg-img', asset('user/img/home-bg.jpg'))
@section('title', 'Bitfumes Blog')
@section('sub-heading', 'Learn Together and Grow Together')
@section('head')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .fa-thumbs-up:hover {
            color: #f41115;
        }

        div.stars {
            width: 270px;
            display: inline-block;
        }

        input.star {
            display: none;
        }

        label.star {
            float: right;
            padding: 10px;
            font-size: 36px;
            color: #444;
            transition: all .2s;
        }

        label.star:before {
            content: '\f005';
            color: #FD4;
            transition: all .25s;
        }

        label.star:hover {
            transform: rotate(-15deg) scale(1.3);
        }

        label.star {
            content: '\f006';
            font-family: FontAwesome;
        }
    </style>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
@endsection
@section('main-content')
    <!-- Main Content -->
    <section class="hero-wrap js-fullheight" style="background-image: url('{{ asset('haircare/images/camera0.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
                <div class="col-lg-12 ftco-animate d-flex align-items-center">
                    <div class="text text-center">
                        <span class="subheading">Studio foto profesional</span>
                        <h1 class="mb-4">Selamat datang di <br>Sinemaku.</h1>
                        <p><a href="{{ route('user.paket-foto') }}"
                                class="btn btn-primary btn-outline-primary px-4 py-2">Reservasi</a></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-md text-center d-flex align-items-stretch">
                    <div class="services-wrap d-flex align-items-center img"
                        style="background-image: url('{{ asset('haircare/images/indoor.jpg') }}');">
                        <div class="text">
                            <h3>Foto Indoor</h3>
                            <p><a href="{{ route('user.paket-foto') }}" class="btn-custom">Lihat Harga <span
                                        class="ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-items-stretch">
                    <div class="text-about py-5 px-4">
                        <h1 class="logo">
                            <a href="#"></span>Sinemaku.</a>
                        </h1>
                        <h2>Beyond Imagination, Change Your View</h2>
                        <p>Informatika Sinematografi dan Fotografi Mahasiswa (ISINEMA) merupakan unit pelaksana kegiatan
                            fotografi, videografi yang dilaksanakan oleh mahasiswa dan didukung oleh PUSRIF (Pusat Riset
                            Informatika) dan Jurusan Informatika, Fakultas Teknik, Universitas Tanjungpura.</p>
                        <p class="mt-3"><a href="{{ route('user.tentang') }}"
                                class="btn btn-primary btn-outline-primary">Read more</a></p>
                    </div>
                </div>
                <div class="col-md text-center d-flex align-items-stretch">
                    <div class="services-wrap d-flex align-items-center img"
                        style="background-image: url('{{ asset('haircare/images/outdoor.jpg') }}');">
                        <div class="text">
                            <h3>Foto Outdoor</h3>
                            <p><a href="{{ route('user.paket-foto') }}" class="btn-custom">Lihat Harga <span
                                        class="ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-pricing">
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Harga</span>
                    <h2 class="mb-4">Harga Paket Foto</h2>
                    <p>Jangan Pikirkan Biaya, Kualitaslah yang Utama ~</p>
                </div>
            </div>
            <div class="row">
                @foreach ($pakets as $paket)
                    <div class="col-md-3 mb-5 ftco-animate">
                        <div class="pricing-entry pb-5 text-center">
                            <div>
                                <h3 class="mb-4">{{ $paket->paket }}</h3>
                                <p><span class="price">IDR {{ number_format($paket->harga, 0, ',', '.') }}</span> <span
                                        class="per">/ sesi</span></p>
                            </div>
                            <ul>
                                <li>{{ $paket->kapasitas }}</li>
                                <li>{{ $paket->durasi }}</li>
                                <li>{{ $paket->keterangan }}</li>
                            </ul>
                            <p class="button text-center"><a href="{{ route('user.paket.create', $paket->id) }}"
                                    class="btn btn-primary px-4 py-3">Daftar</a></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-team">
        <div class="container-fluid px-md-5">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Artistic Director</span>
                    <h2 class="mb-4">Crew</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-team owl-carousel">
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img"
                                    style="background-image: url('{{ asset('haircare/images/stylist-1.jpg') }}');"></div>
                                <h2>Danica Lewis</h2>
                                <span class="position">Hair Stylist</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img"
                                    style="background-image: url('{{ asset('haircare/images/stylist-2.jpg') }}');"></div>
                                <h2>Nicole Simon</h2>
                                <span class="position">Nail Master</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img"
                                    style="background-image: url('{{ asset('haircare/images/stylist-3.jpg') }}');"></div>
                                <h2>Cloe Meyer</h2>
                                <span class="position">Director</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img"
                                    style="background-image: url('{{ asset('haircare/images/stylist-4.jpg') }}');"></div>
                                <h2>Rachel Clinton</h2>
                                <span class="position">Hair Stylist</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img"
                                    style="background-image: url('{{ asset('haircare/images/stylist-5.jpg') }}');"></div>
                                <h2>Dave Buff</h2>
                                <span class="position">Barber</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONI -->
    <section class="testimony-section bg-light">
        <div class="container">
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="testimony-img"
                        style="background-image: url('{{ asset('haircare/images/testimoni.jpg') }}');">
                    </div>
                </div>
                <div class="col-md-6 col-lg-7 py-5 pl-md-5">
                    <div class="py-md-5">
                        <div class="heading-section ftco-animate">
                            <span class="subheading">Testimoni</span>
                            <h2 class="mb-0">Happy Customer</h2>
                        </div>
                        <div class="carousel-testimony owl-carousel ftco-animate">
                            @foreach ($testimonis as $testimoni)
                                <div class="item">
                                    <div class="testimony-wrap pb-4">
                                        <div class="text">
                                            <p class="mb-4">{{ $testimoni->survei }}</p>
                                        </div>
                                        <div class="d-flex">
                                            <div class="user-img"
                                                style="background-image: url('{{ asset('haircare/images/stylist-1.jpg') }}');">
                                            </div>
                                            <div class="pos ml-3">
                                                <p class="name">{{ $testimoni->nama }}</p>
                                                <span class="position">{{ $testimoni->pekerjaan }}</span>
                                            </div>
                                            @for ($i = 0; $i < 5; $i++)
                                                @if ($i < $testimoni->rating)
                                                    <label for="star-5" class="star"></label>
                                                @else
                                                    <span class="star"></span>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
