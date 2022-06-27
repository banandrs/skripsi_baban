@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Paket Foto')
@section('sub-heading','Learn Together and Grow Together')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
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
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Paket Foto
					</span></p>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-pricing">
	<div class="container">
		<div class="row justify-content-center pb-3">
			<div class="col-md-10 heading-section text-center ftco-animate">
				<h2 class="mb-4">Paket Foto</h2>
				<p>Jangan Pikirkan Biaya, Kualitaslah yang Utama ~</p>
			</div>
		</div>
		<div class="row">
			@foreach ( $pakets as $paket )
			<div class="col-md-3 ftco-animate mb-5">
				<div class="pricing-entry pb-5 text-center">
					<div>
						<h3 class="mb-4">{{ $paket->paket }}</h3>
						<p><span class="price">{{ $paket->harga }} IDR</span> <span {{-- <p><span class="price">IDR {{number_format($paket->harga, 0, ',', '.') }}</span> <span --}} class="per">/
								sesi</span></p>
					</div>
					<ul>
						<li>{{ $paket->kapasitas }}</li>
						<li>{{ $paket->durasi }}</li>
						<li>{{ $paket->cetak_foto }}</li>
						<li>{{ $paket->backgroud }}</li>
						<li>{{ $paket->file_foto }}</li>
						<li>{{ $paket->keterangan }}</li>
					</ul>
					<p class="button text-center"><a href="{{ route('user.paket.create',$paket->id) }}" class="btn btn-primary px-4 py-3">Booking</a></p>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section>


@endsection
@section('footer')
<script src="{{ asset('js/app.js') }}"></script>
@endsection