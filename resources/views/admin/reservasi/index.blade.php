@extends('admin._partials.app')
@section('title') Reservasi @endsection
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
          Reservasi
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
            <h3 class="card-title">Reservasi</h3>
          </div>
          <div class="table-responsive">
            <table id="example2" class="table card-table table-vcenter text-nowrap datatable hover">
              <thead>
                <tr>
                  <th width="5%">#</th>
                  <th>Paket</th>
                  <th>Nama</th>
                  <th>Tanggal</th>
                  <th>Waktu</th>
                  <th>Catatan</th>
                  <th>Jumlah Bayar</th>
                  <th width="15%"></th>
                </tr>
              </thead>
              <tbody>
                @forelse($reservasis as $reservasi)
                <tr>
                  <td>{{ $loop->index + 1 }}.</td>
                  <td class="text-muted">
                    {{ $reservasi->paket->paket }}
                  </td>
                  <td class="text-muted">
                    {{ $reservasi->user->name }}
                  </td>
                  <td class="text-muted">
                    {{ $reservasi->tanggal }}
                  </td>
                  <td class="text-muted">
                    {{ $reservasi->waktu }}
                  </td>
                  <td class="text-muted">
                    {{ $reservasi->catatan }}
                  </td>
                  <td class="text-muted">
                    {{ $reservasi->paket->harga }}
                  </td>
                  <td class="text-center">
                    <a href="{{ route('reservasi.edit',$reservasi->slug) }}" class="btn btn-success btn-sm">Sunting
                    </a>
                    <form id="delete-form-{{ $reservasi->id }}" method="post"
                      action="{{ route('reservasi.destroy',$reservasi->id) }}" style="display: none">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                    </form>
                    <a href="" onclick="
                      if(confirm('Are you sure, You Want to delete this?'))
                      {
                      event.preventDefault();
                      document.getElementById('delete-form-{{ $reservasi->id }}').submit();
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
        $('#example2').DataTable({
          "dom": '<".card-body border-bottom py-3"<".d-flex"<".text-muted"l><".ms-auto text-muted"f>>>t<".card-footer d-flex align-items-center"<".m-0 text-muted"i><".pagination m-0 ms-auto"p>><"clear">'
        });
      });
</script>
@endsection