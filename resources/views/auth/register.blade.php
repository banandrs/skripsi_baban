@extends('user/app')
@section('bg-img',asset('user/img/contact-bg.jpg'))
@section('head')
@endsection
@section('title','Daftar Member')
@section('sub-heading','')
@section('main-content')
<!-- Post Content -->
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('haircare/images/bg-1.jpg') }}');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <h2 class="mb-0 bread">Daftar Member</h2>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Member <i class="ion-ios-arrow-round-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>
<section class="ftco-section ftco-booking bg-light">
  <div class="container ftco-relative">
    <div class="row justify-content-center pb-3">
      <div class="col-md-10 heading-section text-center ftco-animate">
        <span class="subheading">Daftar Member</span>
        <h2 class="mb-4">Daftar Member</h2>
        <p>Daftarkan Sekarang</p>
      </div>
    </div>
    <h3 class="vr">Hubungi Kami: 012-3456-7890</h3>
    <div class="row justify-content-center">
      <div class="col-md-10 ftco-animate">
        <form class="appointment-form" role="form" method="POST" action="{{ route('register') }}">
          {{ csrf_field() }}
          <div class="row">
            <div class="col-md-12">
              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="name" placeholder="Nama" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" placeholder="Email address" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group{{ $errors->has('no_hp') ? ' has-error' : '' }}">
                <input id="no_hp" placeholder="No. Handphone" type="text" class="form-control" name="no_hp" value="{{ old('no_hp') }}" required autofocus>
                @if ($errors->has('no_hp'))
                <span class="help-block">
                  <strong>{{ $errors->first('no_hp') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" placeholder="password" type="password" class="form-control" name="password" required>
                @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group">
                <input id="password-confirm" placeholder="Confirm password" type="password" class="form-control" name="password_confirmation" required>
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                Register
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<hr>
@endsection
@section('footer')
@endsection