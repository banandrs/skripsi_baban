@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Kontak')
@section('sub-heading','Learn Together and Grow Together')
@section('head')
<meta name="csrf-token" content="{{ csrf_token() }}">
	<style>
		.fa-thumbs-up:hover{
			color:#f41115;
		}
	</style>
@endsection

@section('main-content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('haircare/images/camera0.jpg') }}');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate pb-5 text-center">
				<h2 class="mb-0 bread">Kontak</h2>
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="ion-ios-arrow-round-forward"></i></a></span> <span>Kontak <i class="ion-ios-arrow-round-forward"></i></span></p>
			</div>
		</div>
	</div>
</section>

@section('main-content')
	Beyond Imagination, Change Your View
@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>
@endsection