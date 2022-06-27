@extends('admin._partials.app')
@section('title')
    Promo
@endsection
@section('head-section')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css" />
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <style>
        div.dataTables_info {
            padding-top: 0 !important;
        }
    </style>
@endsection
@section('main-content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="row align-items-center">
                <div class="col">
                    <h2 class="page-title">
                        Promo (Email)
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-cards">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Promo</h3>
                            <div class="ms-auto">
                                <a class="btn btn-primary btn-sm" href="{{ route('promo.create') }}">
                                    Tambah
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="example1" class="table card-table table-vcenter text-nowrap datatable hover">
                                <thead>
                                    <tr>
                                        <th width="5%">#</th>
                                        <th>Judul</th>
                                        <th class="text-center">Gambar</th>
                                        <th>Pekerjaan</th>
                                        <th>Keterangan</th>
                                        <th width="15%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($promos as $promo)
                                        <tr>
                                            <td>{{ $loop->index + 1 }}.</td>
                                            <td class="text-muted">
                                                {{ $promo->nama_promo }}
                                            </td>
                                            <td class="text-center">
                                                @if (is_null($promo->gambar))
                                                    <img src="{{ asset('background/background-default.jpg') }}"
                                                        alt="{{ $promo->promo }}" class="avatar me-2">
                                                @else
                                                    <img src="/gambar/{{ $promo->gambar }}" alt="{{ $promo->promo }}"
                                                        class="avatar me-2">
                                                @endif
                                            </td>
                                            <td>{{ $promo->pekerjaan }}</td>
                                            <td class="text-muted">
                                                {{ \Illuminate\Support\Str::limit($promo->keterangan, 50) }}
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('promo.edit', $promo->id) }}"
                                                    class="btn btn-success btn-sm">Sunting
                                                </a>
                                                <a href="{{ route('admin.email', $promo->id) }}"
                                                    class="btn btn-primary btn-sm">Kirim
                                                </a>
                                                <form id="delete-form-{{ $promo->id }}" method="post"
                                                    action="{{ route('promo.destroy', $promo->id) }}"
                                                    style="display: none">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                </form>
                                                <a href=""
                                                    onclick="
											if(confirm('Are you sure, You Want to delete this?'))
											{
											event.preventDefault();
											document.getElementById('delete-form-{{ $promo->id }}').submit();
											}
											else{
											event.preventDefault();
										  }"
                                                    class="btn btn-danger btn-sm">Hapus</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <p>This is kosong</p>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer-section')
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example1').DataTable({
                "dom": '<".card-body border-bottom py-3"<".d-flex"<".text-muted"l><".ms-auto text-muted"f>>>t<".card-footer d-flex align-items-center"<".m-0 text-muted"i><".pagination m-0 ms-auto"p>><"clear">'
            });
        });
    </script>
@endsection
