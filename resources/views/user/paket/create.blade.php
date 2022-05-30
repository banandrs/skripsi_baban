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
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('haircare/images/camera0.jpg') }}');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h2 class="mb-0 bread">Paket Foto</h2>
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i
                                class="ion-ios-arrow-round-forward"></i></a></span> <span>Paket Foto</span></p>
            </div>
        </div>
    </div>
</section>
<section class="ftco-section ftco-booking bg-light">
    <div class="container ftco-relative">
        <div class="row justify-content-center pb-3">
            <div class="col-md-10 heading-section text-center ftco-animate fadeInUp ftco-animated">
                <span class="subheading">Booking</span>
                <h2 class="mb-4">{{ $paket->paket }}</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10 ftco-animate fadeInUp ftco-animated">
                @if(session()->has('message'))
                <div class="alert alert-danger">
                    {{ session()->get('message') }}
                </div>
                @endif
                {!! Form::open(['route' => 'user.paket.booking']) !!}
                <div class="row">
                    <div class="form-group">
                        {!! Form::hidden('paket_id', $paket->id, ['id' => 'paket_id', 'class' => 'form-control']) !!}
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            {!! Form::date('tanggal', \Carbon\carbon::now(), ['id' => 'email', 'class' =>
                            'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            {!! Form::select('waktu', [ '08.00 WIB' => '08.00 WIB',
                            '08.30 WIB' => '08.30 WIB',
                            '09.00 WIB' => '09.00 WIB',
                            '09.30 WIB' => '09.30 WIB',
                            '10.00 WIB' => '10.00 WIB',
                            '10.30 WIB' => '10.30 WIB',
                            '11.00 WIB' => '11.00 WIB',
                            '11.30 WIB' => '11.30 WIB',
                            '12.00 WIB' => '12.00 WIB',
                            '12.30 WIB' => '12.30 WIB',
                            '13.00 WIB' => '13.00 WIB',
                            '13.30 WIB' => '13.30 WIB',
                            '13.30 WIB' => '13.30 WIB',
                            '14.00 WIB' => '14.00 WIB',
                            '14.30 WIB' => '14.30 WIB',
                            '15.00 WIB' => '15.00 WIB',
                            '15.30 WIB' => '15.30 WIB',
                            '16.00 WIB' => '16.00 WIB',
                            '16.30 WIB' => '16.30 WIB',
                            '17.00 WIB' => '17.00 WIB',
                            '17.30 WIB' => '17.30 WIB',
                            '18.00 WIB' => '18.00 WIB',
                            '18.30 WIB' => '18.30 WIB',
                            '19.00 WIB' => '19.00 WIB',
                            '19.30 WIB' => '19.30 WIB',
                            '20.00 WIB' => '20.00 WIB',
                            '20.30 WIB' => '20.30 WIB',], null, ['id' => 'waktu', 'placeholder' => 'Pilih waktu',
                            'class' => 'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            {!! Form::text('no_hp', null, ['id' => 'no_hp', 'class' => 'form-control', 'placeholder' =>
                            'Nomor HP']) !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            {!! Form::text('name', null, ['id' => 'name', 'class' => 'form-control', 'placeholder' =>
                            'Nama']) !!}
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            {!! Form::text('email', null, ['id' => 'email', 'class' => 'form-control', 'placeholder' =>
                            'Email']) !!}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::submit('Submit', ['name' => 'booking', 'class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</section>


@endsection
@section('footer')
<script src="{{ asset('js/app.js') }}"></script>
@endsection