@extends('user/app')
@section('bg-img',asset('user/img/contact-bg.jpg'))
@section('head')
@endsection
@section('title','Login Here')
@section('sub-heading','')
@section('main-content')
<!-- Post Content -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('haircare/images/bg-1.jpg') }}');"
  data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <h2 class="mb-0 bread">Member</h2>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i
                class="ion-ios-arrow-round-forward"></i></a></span> <span>Member <i
              class="ion-ios-arrow-round-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section ftco-booking bg-light">
  <div class="container ftco-relative">
    <div class="row justify-content-center pb-3">
      <div class="col-md-10 heading-section text-center ftco-animate">
        <span class="subheading">Login</span>
        <h2 class="mb-4">Login</h2>
        <p>Daftarkan Sekarang</p>
      </div>
    </div>
    <h3 class="vr">Hubungi Kami: 012-3456-7890</h3>
    <div class="row justify-content-center">
      <div class="col-md-10 ftco-animate">
        <form class="appointment-form" role="form" method="POST" action="{{ route('login') }}">
          {{ csrf_field() }}

          <div class="row">
            <div class="col-md-12">
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">


                <input id="email" placeholder="E-mail address" type="email" class="form-control" name="email"
                  value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>

            <div class="col-md-12">
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">


                <input id="password" placeholder="Password" type="password" class="form-control" name="password"
                  required>
                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif

              </div>
            </div>
          </div>
          <div class="form-group">

            <button type="submit" class="col-md-2 btn btn-primary">
              Login
            </button>
            <a href="{{ route('register') }}" class="col-md-2 btn btn-primary">
              Register
            </a>
            <a class="btn btn-link" href="{{ route('password.request') }}">
              Forgot Your Password?
            </a>
            < </div> </form> </div> </div> </div> </section> @endsection @section('footer') @endsection