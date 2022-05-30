@extends('admin._partials.app')
@section('title') Permissions @endsection
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
          Permissions
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
            <h3 class="card-title">Permissions</h3>
            <div class="ms-auto">
              <a class="btn btn-primary btn-sm" href="{{ route('permission.create') }}">
                Tambah
              </a>
            </div>
          </div>
          @include('includes.messages')
          <div class="table-responsive">
            <table id="example1" class="table card-table table-vcenter text-nowrap datatable hover">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Permission Name</th>
                  <th>Permission For</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($permissions as $permission)
                <tr>
                  <td>{{ $loop->index + 1 }}.</td>
                  <td>{{ $permission->name }}</td>
                  <td>{{ $permission->for }}</td>
                  <td><a class="btn btn-sm btn-success"
                      href="{{ route('permission.edit',$permission->id) }}">Sunting</a>
                    <form id="delete-form-{{ $permission->id }}" method="post"
                      action="{{ route('permission.destroy',$permission->id) }}" style="display: none">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                    </form>
                    <a class="btn btn-sm btn-danger" href="" onclick="
                                if(confirm('Are you sure, You Want to delete this?'))
                                    {
                                      event.preventDefault();
                                      document.getElementById('delete-form-{{ $permission->id }}').submit();
                                    }
                                    else{
                                      event.preventDefault();
                                    }">Hapus</a>
                  </td>
                </tr>
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
  $(document).ready( function () {
        $('#example1').DataTable({
          "dom": '<".card-body border-bottom py-3"<".d-flex"<".text-muted"l><".ms-auto text-muted"f>>>t<".card-footer d-flex align-items-center"<".m-0 text-muted"i><".pagination m-0 ms-auto"p>><"clear">'
        });
      });
</script>
@endsection