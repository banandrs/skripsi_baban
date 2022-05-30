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
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('haircare/images/camera0.jpg') }}');"
	data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate pb-5 text-center">
				<h2 class="mb-0 bread">Galeri</h2>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i
								class="ion-ios-arrow-round-forward"></i></a></span> <span>Galeri
					</span></p>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-pricing">
	<div class="container">
		<div class="row justify-content-center pb-3">
			<div class="col-md-10 heading-section text-center ftco-animate">
				<h2 class="mb-4">galeri sinema untan</h2>
				<p>Awak datang, kamek jepret</p>
			</div>
		</div>
	</div>
	<div class="container-fluid p-0">
		<div class="row no-gutters">
			@foreach ($galeris as $galeri)
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="project">
					<img src="/galeri/{{ $galeri->gambar }}" class="img-fluid" alt="{{ $galeri->judul }}">
					<div class="text">
						<span>{{ $galeri->kategori }}</span>
						<h3>{{ $galeri->judul }}</h3>
					</div>
					<a href="/galeri/{{ $galeri->gambar }}"
						class="icon image-popup d-flex justify-content-center align-items-center">
						<span class="icon-expand"></span>
					</a>
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