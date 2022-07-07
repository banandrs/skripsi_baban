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
            <h3 class="vr">Hubungi Kami: 012-3456-7890</h3>
            <div class="row justify-content-center">
                <div class="col-md-6 ftco-animate">
                    @if (session()->has('warning'))
                        <div class="alert alert-warning text-center">
                            {{ session()->get('warning') }}
                        </div>
                    @endif
                    @if (session()->has('message'))
                        <div class="alert alert-success text-center">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                    <form action="{{ route('testimoni.store.nohp') }}" class="appointment-form" method="post">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="number" oninput="this.value=this.value.slice(0,this.maxLength)"
                                        name="no_hp" class="form-control" id="no_hp" placeholder="Masukan no hp.."
                                        maxlength="15" required>
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
