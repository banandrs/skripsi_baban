@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Kontak')
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
				<h2 class="mb-0 bread">Tentang</h2>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Tentang </span></p>
			</div>
		</div>
	</div>
</section>
<section class="ftco-section ftco-no-pb ftco-no-pt">
	<div class="container">
		<div class="row">
			<div class="col-md-6 d-flex">
				<div class="p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/bg-2.jpg);">
					<a href="https://www.youtube.com/watch?v=C5GVq2Itoz8" class="icon popup-vimeo d-flex justify-content-center align-items-center">
						<span class="icon-play"></span>
					</a>
				</div>
			</div>
			<div class="col-md-6 py-md-5 pb-5 wrap-about pb-md-5 ftco-animate fadeInUp ftco-animated">
				<div class="heading-section mb-4 mt-md-5">
					<span class="subheading">About Us</span>
					<h2 class="mb-4">Beyond Imagination, Change Your View</h2>
				</div>
				<div class="pb-md-5">
					<p> Informatika Sinematografi dan Fotografi Mahasiswa (ISINEMA) merupakan unit pelaksana kegiatan fotografi, videografi yang dilaksanakan oleh mahasiswa dan didukung oleh PUSRIF (Pusat Riset Informatika) dan Jurusan Informatika, Fakultas Teknik, Universitas Tanjungpura.</p>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('footer')
<script src="{{ asset('js/app.js') }}"></script>
@endsection