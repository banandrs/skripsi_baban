@extends('admin._partials.app')
@section('title')
Role User
@stop
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
          Role User
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
            <h3 class="card-title">Roles</h3>
            <div class="ms-auto">
              <a class="btn btn-primary btn-sm" href="{{ route('role.create') }}">
                Tambah Baru
              </a>
            </div>
          </div>
          <div class="table-responsive">
            <table id="example1" class="table card-table table-vcenter text-nowrap datatable hover">
              <thead>
                <tr>
                  <th width=20%>#</th>
                  <th width=65%>Role</th>
                  <th width=15%></th>
                </tr>
              </thead>
              <tbody>
                @foreach($roles as $role)
                <tr>
                  <td>{{ $loop->index + 1 }}.</td>
                  <td>{{ $role->name }}</td>
                  <td><a href="{{ route('role.edit',$role->id) }}" class="btn btn-sm btn-success">Sunting</a>
                    <form id="delete-form-{{ $role->id }}" method="post" action="{{ route('role.destroy',$role->id) }}" style="display: none">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                    </form>
                    <a href="" onclick="
                                if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $role->id }}').submit();
                                    }
                                    else{
                                      event.preventDefault();
                                    }" class="btn btn-sm btn-danger">Hapus</a>
                  </td>
                </tr>
                @endforeach
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