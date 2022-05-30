@extends('user/app')

@section('bg-img',asset('user/img/home-bg.jpg'))
@section('title','Bitfumes Blog')
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
		@foreach ($hasil as $promo)
			{{ $promo->nama_promo }}
		@endforeach
@endsection
@section('footer')
	<script src="{{ asset('js/app.js') }}"></script>
@endsection