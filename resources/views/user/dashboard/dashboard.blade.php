@extends('user/app')
@section('bg-img',asset('user/img/contact-bg.jpg'))
@section('head')
@endsection
@section('title','Login Here')
@section('sub-heading','')
@section('main-content')
<!-- Post Content -->
<section class="hero-wrap hero-wrap-2"
  style="background-image: url('{{ asset('haircare/images/camera3.jpg') }}');"
  data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <h2 class="mb-0 bread">Dashboard</h2>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i
                class="ion-ios-arrow-round-forward"></i></a></span><span>Dashboard <i
              class="ion-ios-arrow-round-forward"></i></span> {{ Auth::user()->name }}</p>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section ftco-pricing">
  <div class="container">
    <div class="row justify-content-center pb-3">
      <div class="col-md-10 heading-section text-center ftco-animate">
        <span class="subheading"></span>
        <h2 class="mb-4"></h2>
        <p></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 ftco-animate">
        <div class="pricing-entry pb-5 text-center">
          <div>
            <h3 class="mb-4">Riwayat Booking Foto</h3>
            <!-- <p><span class="price">$50.00</span> <span class="per">/ session</span></p> -->
            @foreach(Auth::user()->jadwal as $booking)
              <ul>
                <li>{{ $booking->paket->paket }}</li>
              </ul>
            @endforeach
          </div>
          <a href="#">
          </a>
        </div>
      </div>
      <div class="col-md-3 ftco-animate">
        <div class="pricing-entry pb-5 text-center">
          <div>
            <h3 class="mb-4">Riwayat Pendaftaran Member</h3>
            <!-- <p><span class="price">$50.00</span> <span class="per">/ session</span></p> -->
            {{ Auth::user()->created_at }}
          </div>
          <a href="#">
          </a>
        </div>
      </div>
      <div class="col-md-3 ftco-animate">
        <div class="pricing-entry pb-5 text-center">
          <div>
            <h3 class="mb-4">Paket Foto yang dipilih</h3>
            <!-- <p><span class="price">$50.00</span> <span class="per">/ session</span></p> -->
          </div>
          <a href="#">
          </a>
        </div>
      </div>
      <div class="col-md-3 ftco-animate">
        <div class="pricing-entry pb-5 text-center">
          <div>
            <h3 class="mb-4">Profil<span class="float-right">Edit</span></h3>
            <!-- <p><span class="price">$50.00</span> <span class="per">/ session</span></p> -->
            Nama : {{ Auth::user()->name }} <br>
            Email : {{ Auth::user()->email }} <br>
            No. Hp : {{ Auth::user()->no_hp }}
          </div>
          <a href="#">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('footer')
@endsection