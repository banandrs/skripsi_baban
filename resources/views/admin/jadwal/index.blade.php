@extends('admin.layouts.app')
@section('headSection')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
@endsection
@section('main-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">JADWAL FOTO</h4>
                    <div class="card-description">
                        {{-- <a class="btn btn-primary btn-icon-text btn-sm" href="{{ route('jadwal.create') }}">
                        Tambah Baru <i class="ti-plus btn-icon-prepend"></i>
                        </a> --}}
                    </div>
                    <table id="example1" class="table-bordered table-hover">
                        <thead>
                            <tr>
                                <th style="width:1%" class="text-center">#</th>
                                <th style="width:15%">Paket Foto</th>
                                <th style="width:15%">Nama Pemesan</th>
                                <th style="width:25%">Tanggal</th>
                                <th style="width:25%">Waktu</th>
                                <th style="width:15%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jadwals as $jadwal)
                                <tr>
                                    <td class="text-center">{{ $loop->index + 1 }}.</td>
                                    <td>{{ $jadwal->paket->paket }}</td>
                                    <td>
                                        @if(is_null($jadwal->user_id))
                                            <p>Bukan Member</p>
                                        @else
                                            {{ $jadwal->user->name }}
                                        @endif
                                    </td>
                                    <td>{{ $jadwal->tanggal }}</td>
                                    <td>{{ $jadwal->waktu }}</td>
                                    <td>

                                        <a href="{{ route('jadwal.show',$jadwal->slug) }}"
                                            class="btn btn-primary btn-icon-text btn-sm">Edit <i
                                                class="ti-eye btn-icon-prepend"></i>
                                        </a>

                                        {{-- <form id="delete-form-{{ $jadwal->id }}"
                                        method="post"
                                        action="{{ route('jadwal.destroy',$jadwal->id) }}"
                                        style="display: none">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        </form>
                                        <a href="" onclick="
                    if(confirm('Are you sure, You Want to delete this?'))
                    {
                    event.preventDefault();
                    document.getElementById('delete-form-{{ $jadwal->id }}').submit();
                    }
                    else{
                    event.preventDefault();
                  }" class="btn btn-danger btn-icon-text btn-sm">Hapus <i class="ti-trash btn-icon-prepend"></i></a>
                                        --}}
                                    </td>
                                </tr>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div> @endsection @section('footerSection') <script type="text/javascript" charset="utf8"
            src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js">
        </script>
        <script>
            $(function () {
                $("#example1").DataTable();
            });
        </script>
        @endsection