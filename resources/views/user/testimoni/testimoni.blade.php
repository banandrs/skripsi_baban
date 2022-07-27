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

        input.star:checked~label.star:before {
            content: '\f005';
            color: #FD4;
            transition: all .25s;
        }

        input.star-5:checked~label.star:before {
            color: #FE7;
            text-shadow: 0 0 20px #952;
        }

        input.star-1:checked~label.star:before {
            color: #F62;
        }

        label.star:hover {
            transform: rotate(-15deg) scale(1.3);
        }

        label.star:before {
            content: '\f006';
            font-family: FontAwesome;
        }
    </style>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
@endsection
@section('main-content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('haircare/images/camera0.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h2 class="mb-0 bread">Testimoni</h2>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i
                                    class="ion-ios-arrow-round-forward"></i></a></span> <span>Testimoni</span></p>
                </div>
            </div>
        </div>
    </section>
    <section class="ftco-section ftco-booking bg-light">
        <div class="container ftco-relative">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <h2 class="mb-4">Testimoni</h2>
                    <p>Bantu rating kami dengan berikan pendapat dan saran anda</p>
                </div>
            </div>
            <h3 class="vr">Hubungi Kami: 0812-3456-7890</h3>
            <div class="row justify-content-center">
                <div class="col-md-10 ftco-animate">
                    @if (session()->has('message'))
                        <div class="alert alert-success text-center">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form action="/testimoni/store" class="appointment-form" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="testimoni_nama" class="form-control" id="testimoni_nama"
                                        placeholder="Nama" value="{{ !empty($user) ? $user->name : null }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="testimoni_pekerjaan" class="form-control"
                                        id="testimoni_pekerjaan" placeholder="Email"
                                        value="{{ !empty($user) ? $user->email : null }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="testimoni_survei" id="testimoni_survei" cols="30" rows="7" class="form-control"
                                        placeholder="Menurut saya sinemaku itu ..."></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="stars">
                                    <input value="5" class="star star-5" id="star-5" type="radio"
                                        name="rating" />
                                    <label class="star star-5" for="star-5"></label>
                                    <input value="4" class="star star-4" id="star-4" type="radio"
                                        name="rating" />
                                    <label class="star star-4" for="star-4"></label>
                                    <input value="3" class="star star-3" id="star-3" type="radio"
                                        name="rating" />
                                    <label class="star star-3" for="star-3"></label>
                                    <input value="2" class="star star-2" id="star-2" type="radio"
                                        name="rating" />
                                    <label class="star star-2" for="star-2"></label>
                                    <input value="1
								" class="star star-1" id="star-1" type="radio"
                                        name="rating" />
                                    <label class="star star-1" for="star-1"></label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('footer')
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
