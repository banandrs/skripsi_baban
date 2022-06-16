@extends('admin._partials.app')
@section('title') Pelanggan @endsection
@section('head-section')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css" />
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
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Pelanggan</h3>
          </div>
          <div class="table-responsive">
            <table id="example1" class="table card-table table-vcenter text-nowrap datatable hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Nama</th>
                  <th>Umur</th>
                  <th>Pekerjaan</th>
                  <th>Email</th>
                  <th>Nomor Handphone</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @forelse($pelanggans as $pelanggan)
                <tr>
                  <td>{{ $loop->index + 1 }}.</td>
                  <td class="text-muted">
                    {{ $pelanggan->name }}
                  </td>
                  <td class="text-muted">
                    {{ $pelanggan->umur }}
                  </td>
                  <td class="text-muted">
                    {{ $pelanggan->pekerjaan }}
                  </td>
                  <td>
                    {{ $pelanggan->email }}
                  </td>
                  <td class="text-muted">
                    {{ $pelanggan->no_hp }}
                  </td>
                  <td class="text-center">
                    <a href="{{ route('pelanggan.edit',$pelanggan->id) }}" class="btn btn-success btn-sm">Sunting
                    </a>
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