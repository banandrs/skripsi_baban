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
  <!-- <div class="page-header d-print-none">
    <div class="row align-items-center">
      <div class="col">
        <h2 class="page-title">
          Reservasi
        </h2>
      </div>
    </div>
  </div> -->

  <div class="page-header d-print-none">
    <div class="row g-2 align-items-center">
      <div class="col">
        <h2 class="page-title">
          Reservasi
        </h2>
      </div>
      <!-- Page title actions -->
      <div class="col-12 col-md-auto ms-auto d-print-none">
        <!-- <button type="button" class="btn btn-primary" onclick="javascript:window.print();">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
            <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
            <rect x="7" y="13" width="10" height="8" rx="2" /></svg>
          Print Reservasi
        </button> -->
        <a type="button" class="btn btn-primary" href="{{ route('reservasi.export') }}">
          <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
            <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
            <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
            <rect x="7" y="13" width="10" height="8" rx="2" /></svg>
          Export Reservasi
        </a>
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
                    {{ rupiah($reservasi->paket->harga) }}
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
    $('#example2').DataTable({
      "dom": '<".card-body border-bottom py-3"<".d-flex"<".text-muted"l><".ms-auto text-muted"f>>>t<".card-footer d-flex align-items-center"<".m-0 text-muted"i><".pagination m-0 ms-auto"p>><"clear">'
    });
  });
</script>
@endsection