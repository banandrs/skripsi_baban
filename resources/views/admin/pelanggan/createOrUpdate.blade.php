@extends('admin._partials.app')
@section('title')
Pelanggan
@stop
@section('main-content')
<div class="container-xl">
	<div class="page-header d-print-none">
		<div class="row align-items-center">
			<div class="col">
				<h2 class="page-title">
					Pelanggan
				</h2>
			</div>
		</div>
	</div>
</div>
<div class="page-body">
	<div class="container-xl">
		<div class="row row-cards">
			<div class="col-12">
				@if(isset($pelanggan))
				{!! Form::model($pelanggan, ['route' => ['pelanggan.update', $pelanggan->id], 'method' => 'patch',
				'files' => true, 'class' => 'card'])
				!!}
				@else
				{!! Form::open(['route' => 'pelanggan.store', 'files' => true, 'class' => 'card']) !!}
				@endif
				@if(isset($pelanggan))
				<div class="card-header">
					<h4 class="card-title">Sunting Pelanggan</h4>
				</div>
				@else
				<div class="card-header">
					<h4 class="card-title">Tambah Paket Foto</h4>
				</div>
				@endif
				<div class="card-body">
					<div class="row">
						<div class="col-xl-12">
							<div class="row">
								<div class="col-md-12 col-xl-12">
									<div class="mb-3">
									
										{!! Form::label('name', 'Nama', ['class' => 'form-label']) !!}
										{!! Form::text('name', Input::old('name'), ['id' => 'name',
										'class'
										=>
										'form-control', 'placeholder' => 'Nama']) !!}
									</div>
									<div class="mb-3">
										{!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
										{!! Form::text('email', Input::old('email'), ['id' => 'email', 'class' =>
										'form-control', 'placeholder' => 'Email']) !!}
									</div>
									<div class="mb-3">
										{!! Form::label('no_hp', 'Nomor Handphone', ['class' => 'form-label']) !!}
										{!! Form::text('no_hp', Input::old('no_hp'), ['id' => 'no_hp', 'class' =>
										'form-control', 'placeholder' => 'Nomor Handphone'])
										!!}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="d-flex">
						<a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">Batal</a>
						@if(isset($pelanggan))
						{!! Form::submit('Perbaharui', ['name' => 'simpan', 'class' => 'btn btn-success
						ms-auto']) !!}
						@else
						{!! Form::submit('Simpan', ['name' => 'simpan', 'class' => 'btn btn-success
						ms-auto']) !!}
						@endif
					</div>
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
	$('textarea').keyup(function() {
    
	var characterCount = $(this).val().replace(/\w/g,'+').length,
		current = $('#current'),
		maximum = $('#maximum'),
		theCount = $('#the-count');
	  
	current.text(characterCount);	
  });

			var rupiah = document.getElementById("harga");
				rupiah.addEventListener("keyup", function (e) {
					// tambahkan 'Rp.' pada saat form di ketik
					// gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka
					rupiah.value = formatRupiah(this.value, "Rp. ");
				});

				/* Fungsi formatRupiah */
				function formatRupiah(angka, prefix) {
					var number_string = angka.replace(/[^,\d]/g, "").toString(),
						split = number_string.split(","),
						sisa = split[0].length % 3,
						rupiah = split[0].substr(0, sisa),
						ribuan = split[0].substr(sisa).match(/\d{3}/gi);

					// tambahkan titik jika yang di input sudah menjadi angka ribuan
					if (ribuan) {
						separator = sisa ? "." : "";
						rupiah += separator + ribuan.join(".");
					}

					rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
					return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";
				}
</script>
@endsection