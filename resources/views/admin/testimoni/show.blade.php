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
          <h4 class="card-title">Testimoni</h4>
          <!-- <a class="card-description" href="{{ route('testimoni.create') }}">
            Add New
          </a> -->
          <div class="table-responsive pt-3">
            <table id="example1" class="table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Pekerjaan</th>
                  <th>Survei</th>
                  <th>Rating</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                @foreach ($testimonis as $testimoni)
                <tr>
                  <td>{{ $loop->index + 1 }}</td>
                  <td>{{ $testimoni->nama }}</td>
                  <td>{{ $testimoni->pekerjaan }}</td>
                  <td>{{ $testimoni->survei }}</td>
                  <td>{{ $testimoni->rating }}</td>
                  <td><a href="{{ route('testimoni.edit',$testimoni->id) }}"><span class="glyphicon glyphicon-edit"></span>edit</a>
                  
                  <form id="delete-form-{{ $testimoni->id }}" method="post" action="{{ route('testimoni.destroy',$testimoni->id) }}" style="display: none">
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
                    }" ><span class="glyphicon glyphicon-trash"></span>Hapus</a>
                  </td>
                </tr>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </div>
  </div>
  @endsection
  @section('footerSection')
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
  <script>
  $(function () {
  $("#example1").DataTable();
  });
  </script>
  @endsection