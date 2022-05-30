@extends('admin._partials.app')
@section('title')
Paket Foto
@stop
@section('main-content')
<div class="container-xl">
	<div class="page-header d-print-none">
		<div class="row align-items-center">
			<div class="col">
				<h2 class="page-title">
					Paket Foto
				</h2>
			</div>
		</div>
	</div>
</div>
<div class="page-body">
	<div class="container-xl">
		<div class="row row-cards">
			<div class="col-12">
				@if(isset($paket))
				{!! Form::model($paket, ['route' => ['paket.update', $paket->id], 'method' => 'patch',
				'files' => true, 'class' => 'card'])
				!!}
				@else
				{!! Form::open(['route' => 'paket.store', 'files' => true, 'class' => 'card']) !!}
				@endif
				@if(isset($paket))
				<div class="card-header">
					<h4 class="card-title">Sunting Paket Foto</h4>
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
										{!! Form::label('paket', 'Jenis Paket', ['class' => 'form-label']) !!}
										{!! Form::text('paket', Input::old('paket'), ['id' => 'paket', 'class' =>
										'form-control', 'placeholder' => 'Jenis Paket']) !!}
									</div>
									<div class="mb-3">
										{!! Form::label('harga', 'Harga Paket', ['class' => 'form-label']) !!}
										{!! Form::text('harga', Input::old('harga'), ['id' => 'harga', 'class' =>
										'form-control', 'placeholder' => 'Harga Paket']) !!}
									</div>
									<div class="mb-3">
										{!! Form::label('kapasitas', 'Kapasitas Foto', ['class' => 'form-label']) !!}
										{!! Form::number('kapasitas', Input::old('kapasitas'), ['id' => 'kapasitas',
										'class' =>
										'form-control', 'placeholder' => 'Kapasitas Foto', 'min' => '1', 'max' =>
										'100']) !!}
									</div>
									<div class="mb-3">
										{!! Form::label('durasi', 'Durasi Foto', ['class' => 'form-label']) !!}
										{!! Form::text('durasi', Input::old('durasi'), ['id' => 'durasi', 'class' =>
										'form-control', 'placeholder' => 'Durasi Foto'])
										!!}
									</div>
									<div class="mb-3">
										{!! Form::label('background', 'Background Foto', ['class' => 'form-label']) !!}
										{!! Form::file('background', ['id' => 'background', 'class' =>
										'form-control'])
										!!}
									</div>
									<div class="mb-3">
										{!! Form::label('cetak_foto', 'Cetak Foto', ['class' => 'form-label']) !!}
										{!! Form::text('cetak_foto', Input::old('cetak_foto'), ['id' => 'cetak_foto',
										'class' =>
										'form-control']) !!}
									</div>
									<div class="mb-3">
										{!! Form::label('file_foto', 'File Foto', ['class' => 'form-label']) !!}
										{!! Form::text('file_foto', Input::old('file_foto'), ['id' => 'file_foto',
										'class' =>
										'form-control']) !!}
									</div>
									<div class="mb-3">
										{!! Html::decode(Form::label('keterangan', 'Keterangan Paket
										<span class="form-label-description">
											<span id="current" style="margin-right: -4px;">0</span>
											<span id="maximum">/100</span>
										</span>
										',
										[ 'id' => 'the-count', 'class' =>
										'form-label'])) !!}
										{!! Form::textarea('keterangan', Input::old('keterangan'), ['id' =>
										'keterangan_paket',
										'class' =>
										'form-control', 'placeholder' => 'Keterangan Paket', 'rows' => '6']) !!}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="d-flex">
						<a href="{{ route('paket.index') }}" class="btn btn-secondary">Batal</a>
						@if(isset($paket))
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