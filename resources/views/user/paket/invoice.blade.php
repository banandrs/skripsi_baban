@extends('user.app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title')
Paket Foto
@endsection
@section('head')
<style>
    .fa-thumbs-up:hover {
        color: #f41115;
    }
</style>
@endsection

@section('main-content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('haircare/images/camera0.jpg') }}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h2 class="mb-0 bread">Paket Foto</h2>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Paket Foto</span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-booking bg-light">
    <div class="container ftco-relative">
        <div class="row justify-content-center pb-3">
            <div class="col-md-10 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <span class="subheading">Booking</span>

                <p>Paket Foto Terbaik Hanya untuk Kamu</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 ftco-animate fadeInUp ftco-animated">
                <!-- {{ $jadwal->paket_id }} -->

                @if(session()->has('message'))
                <div class="alert alert-success text-center">
                    {{ session()->get('message') }}
                </div>
                @endif

            </div>
        </div>
    </div>
</section>


@endsection
@section('footer')
<script src="{{ asset('js/app.js') }}"></script>
@endsection