@extends('admin._partials.app')
@section('title') Testimoni @endsection
@section('head-section')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css" />
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<style>
    div.dataTables_info {
        padding-top: 0 !important;
    }

    .fa-thumbs-up:hover {
        color: #f41115;
    }

    div.stars {
        width: 270px;
        display: inline-block;
    }

    input.star {
        display: none;
    }

    label.star {
        float: right;
        padding: 10px;
        font-size: 36px;
        color: #444;
        transition: all .2s;
    }

    label.star:before {
        content: '\f005';
        color: #FD4;
        transition: all .25s;
    }

    label.star:hover {
        transform: rotate(-15deg) scale(1.3);
    }

    label.star {
        content: '\f006';
        font-family: FontAwesome;
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
                    Testimoni
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
                        <h3 class="card-title">Testimoni</h3>
                    </div>
                    <div class="table-responsive">
                        <table id="example1" class="table card-table table-vcenter text-nowrap datatable hover">
                            <thead>
                                <tr>
                                    <th width="5%">#</th>
                                    <th>Nama</th>
                                    <th>Komentar</th>
                                    <th>Rating</th>
                                    <th width="15%"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($testimonis as $testimoni)
                                <tr>
                                    <td>{{ $loop->index + 1 }}.</td>
                                    <td class="text-muted">
                                        {{ $testimoni->nama }}
                                    </td>
                                    <td class="text-muted">
                                        {{ $testimoni->survei }}
                                    </td>
                                    <td class="text-muted">
                                        @for ($i = 0; $i < 5; $i++) @if ($i < $testimoni->rating)
                                            <label for="star-5" class="star"></label>
                                            @else
                                            <span class="star"></span>
                                            @endif
                                            @endfor
                                    </td>
                                    <td class="text-center">
                                        <form id="delete-form-{{ $testimoni->id }}" method="post"
                                            action="{{ route('aktivitas.destroy',$testimoni->id) }}"
                                            style="display: none">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                        </form>
                                        <a href="" onclick="
											if(confirm('Are you sure, You Want to delete this?'))
											{
											event.preventDefault();
											document.getElementById('delete-form-{{ $testimoni->id }}').submit();
											}
											else{
											event.preventDefault();
										  }" class="btn btn-danger btn-sm">Hapus</a>
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
    $(document).ready( function () {
        $('#example1').DataTable({
          "dom": '<".card-body border-bottom py-3"<".d-flex"<".text-muted"l><".ms-auto text-muted"f>>>t<".card-footer d-flex align-items-center"<".m-0 text-muted"i><".pagination m-0 ms-auto"p>><"clear">'
        });
      });
</script>
@endsection