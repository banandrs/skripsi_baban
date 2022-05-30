@extends('admin.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">


    <!-- Main content -->
    <section class="content">

        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Jadwal Foto</h3>
                        </div>

                        @include('includes.messages')
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="post">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}
                            <div class="box-body">
                                <div class="col-lg-offset-3 col-lg-6">

                                    <div class="form-group">
                                        <label for="paket">Jenis Paket</label>
                                        <input type="text" class="form-control" id="paket" name="jenis_paket"
                                            placeholder="paket Title" value="{{ $jadwal->paket_id }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="harga">Harga</label>
                                        <input type="text" class="form-control" id="harga" name="harga"
                                            placeholder="role Title" value="{{ $jadwal->tanggal }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="kapasitas">Kapasitas</label>
                                        <input type="text" class="form-control" id="kapasitas" name="kapasitas"
                                            placeholder="role Title" value="{{ $jadwal->waktu }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="durasi">Durasi</label>
                                        <input type="text" class="form-control" id="durasi" name="durasi"
                                            placeholder="role Title" value="{{ $jadwal->slug }}">
                                    </div>

                                    {{-- <div class="form-group">
                                        <label for="background">Background</label>
                                        <input type="text" class="form-control" id="background" name="background"
                                            placeholder="role Title" value="{{ $jadwal->background }}">
                                </div> --}}

                                {{-- <div class="form-group">
                                        <label for="cetak_foto">Cetak Foto</label>
                                        <input type="text" class="form-control" id="cetak_foto" name="cetak_foto"
                                            placeholder="role Title" value="{{ $jadwal->cetak_foto }}">
                            </div> --}}

                            {{-- <div class="form-group">
                                        <label for="file_foto">File Foto</label>
                                        <input type="text" class="form-control" id="file_foto" name="file_foto"
                                            placeholder="role Title" value="{{ $jadwal->file_foto }}">
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan"
                            placeholder="role Title" value="{{ $jadwal->keterangan }}">
                    </div> --}}

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('paket.index') }}" class="btn btn-warning">Back</a>
                    </div>

                </div>

            </div>

            </form>
        </div>
</div>
</div>
</div>

@endsection