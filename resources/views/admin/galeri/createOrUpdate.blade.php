@extends('admin._partials.app')
@section('title')
Galeri
@stop
@section('main-content')
<div class="container-xl">
	<div class="page-header d-print-none">
		<div class="row align-items-center">
			<div class="col">
				<h2 class="page-title">
					Galeri
				</h2>
			</div>
		</div>
	</div>
</div>
<div class="page-body">
	<div class="container-xl">
		<div class="row row-cards">
			<div class="col-12">
				@if(isset($galeri))
				{!! Form::model($galeri, ['route' => ['galeri.update', $galeri->id], 'method' => 'patch',
				'files' => true, 'class' => 'card'])
				!!}
				@else
				{!! Form::open(['route' => 'galeri.store', 'files' => true, 'class' => 'card']) !!}
				@endif
				@if(isset($galeri))
				<div class="card-header">
					<h4 class="card-title">Sunting Galeri Foto</h4>
				</div>
				@else
				<div class="card-header">
					<h4 class="card-title">Tambah Galeri Foto</h4>
				</div>
				@endif
				<div class="card-body">
					<div class="row">
						<div class="col-xl-12">
							<div class="row">
								<div class="col-md-12 col-xl-12">
									<div class="mb-3">
										{!! Form::label('judul', 'Judul', ['class' => 'form-label']) !!}
										{!! Form::text('judul', Input::old('judul'), ['id' => 'judul', 'class' =>
										'form-control', 'placeholder' => 'Judul']) !!}
									</div>
									<div class="mb-3">
										{!! Form::label('gambar', 'Gambar', ['class' => 'form-label']) !!}
										{!! Form::file('gambar', ['id' => 'gambar', 'class' =>
										'form-control'])
										!!}
									</div>
									<div class="mb-3">
										{!! Form::label('kategori', 'Kategori', ['class' => 'form-label']) !!}
										{!! Form::select('kategori', ['indoor' => 'indoor', 'outdoor' =>
										'outdoor'], Input::old('kategori'),
										['id' => 'kategori',
										'class' =>
										'form-select']) !!}
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="card-footer">
					<div class="d-flex">
						<a href="{{ route('galeri.index') }}" class="btn btn-secondary">Batal</a>
						@if(isset($galeri))
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