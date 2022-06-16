@extends('admin._partials.app')
@section('title') User @endsection
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
  <div class="page-header d-print-none">
    <div class="row align-items-center">
      <div class="col">
        <h2 class="page-title">
          User
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
            <h3 class="card-title">Scan Barcode</h3>
          </div>
          @include('includes.messages')
          <div class="table-responsive">
            <div class="card-body">
              <h4>Scan</h4>
              <div class="text-center">
                <img src="" alt="QRcode" id="qrcode">
                <p id="logs">Loading...</p>
              </div>
            </div>
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


    let sessionId = '{{ $phone }}'
    // console.log(sessionId);

    $.ajax({
      type: "POST",
      url: 'https://wa-restapi2.herokuapp.com/sessions/add',
      data: {
        // _token: '{{ csrf_token() }}',
        id: sessionId,
        isLegacy: false
      },
      dataType: "JSON",
      success: function(res) {
        console.log(res)
        // window.location.reload(true);
        $('#qrcode').attr('src', res.data.qr)
        $('#logs').text(res.message)
      },
      error: function(error) {
        console.log(error)
        $('#logs').text(res.message.responseJSON.message)
      }
    });

  });
</script>
@endsection