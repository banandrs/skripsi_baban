@extends('admin._partials.app')
@section('title')
    Promo
@stop
@section('main-content')
    <div class="container-xl">
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Promo
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    @if (isset($promo))
                        {!! Form::model($promo, ['route' => ['promo.update', $promo->id], 'method' => 'patch', 'files' => true, 'class' => 'card']) !!}
                    @else
                        {!! Form::open(['route' => 'promo.store', 'files' => true, 'class' => 'card']) !!}
                    @endif
                    @if (isset($promo))
                        <div class="card-header">
                            <h4 class="card-title">Sunting Promo</h4>
                        </div>
                    @else
                        <div class="card-header">
                            <h4 class="card-title">Tambah Promo</h4>
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="row">
                                    <div class="col-md-12 col-xl-12">
                                        <div class="mb-3">
                                            {!! Form::label('nama_promo', 'Nama Promo', ['class' => 'form-label']) !!}
                                            {!! Form::text('nama_promo', null, ['id' => 'nama_promo', 'class' => 'form-control', 'placeholder' => 'Nama Promo']) !!}
                                            {{-- <input type="text" name="nama_promo" value="{{ old('nama_promo') }}"
                                                placeholder="Masukkan Nama Akun" class="form-control" required> --}}

                                            @error('nama_promo')
                                                <div class="invalid-feedback" style="display: block">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="mb-3">
                                            {!! Form::label('pekerjaan', 'Pekerjaan', ['class' => 'form-label']) !!}
                                            {{ Form::select(
                                                'pekerjaan',
                                                [
                                                    'Siswa' => 'Siswa',
                                                    'Mahasiswa' => 'Mahasiswa',
                                                    'Wiraswasta' => 'Wiraswasta',
                                                    'ASN' => 'ASN',
                                                ],
                                                null,
                                                ['placeholder' => 'Pilih Pekerjaan', 'class' => 'form-select'],
                                            ) }}
                                        </div>
                                        <div class="mb-3">
                                            {!! Form::label('gambar', 'Gambar', ['class' => 'form-label']) !!}
                                            {!! Form::file('gambar', ['id' => 'gambar', 'class' => 'form-control']) !!}
                                        </div>
                                        <div class="mb-3">
                                            {!! Html::decode(
    Form::label(
        'keterangan',
        'Keterangan Promo
                                                                                    <span class="form-label-description">
                                                                                        <span id="current" style="margin-right: -4px;">0</span>
                                                                                        <span id="maximum">/100</span>
                                                                                    </span>
                                                                                    ',
        ['id' => 'the-count', 'class' => 'form-label'],
    ),
) !!}
                                            {!! Form::textarea('keterangan', Input::old('keterangan'), ['id' => 'keterangan_paket', 'class' => 'form-control', 'placeholder' => 'Keterangan Paket', 'rows' => '6']) !!}
                                        </div>

                                        <div class="mb-3 row">
                                            {!! Form::label('send_at', 'Dikirim saat (Opsional)', ['class' => 'form-label']) !!}
                                            <div class="col-6">
                                                {!! Form::date('send_at', null, ['id' => 'judul', 'class' => 'form-control', 'placeholder' => 'Tanggal']) !!}
                                            </div>
                                            <div class="col-6">
                                                {!! Form::time('time', null, ['id' => 'time', 'class' => 'form-control', 'placeholder' => 'Jam']) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex">
                            <a href="{{ url('/admin/promo') }}" class="btn btn-secondary">Batal</a>
                            @if (isset($paket))
                                {!! Form::submit('Perbaharui', [
    'name' => 'simpan',
    'class' => 'btn btn-success
                        ms-auto',
]) !!}
                            @else
                                {!! Form::submit('Simpan', [
    'name' => 'simpan',
    'class' => 'btn btn-success
                        ms-auto',
]) !!}
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

            var characterCount = $(this).val().replace(/\w/g, '+').length,
                current = $('#current'),
                maximum = $('#maximum'),
                theCount = $('#the-count');

            current.text(characterCount);
        });

        var rupiah = document.getElementById("harga");
        rupiah.addEventListener("keyup", function(e) {
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
