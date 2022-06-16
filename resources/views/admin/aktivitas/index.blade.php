@extends('admin._partials.app')
@section('title') Aktivitas Log @endsection
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
					Aktivitas Log
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
						<h3 class="card-title">Aktivitas Log</h3>
					</div>
					<div class="table-responsive">
						<table id="example1" class="table card-table table-vcenter text-nowrap datatable hover">
							<thead>
								<tr>
									<th width="5%">#</th>
									<th>Subject</th>
									<th>Method</th>
									<th>IP</th>
									<th>User Id</th>
									<th width="15%"></th>
									<!-- <th>URL</th> -->
									<!-- <th>User Agent</th> -->
								</tr>
							</thead>
							<tbody>
								@forelse($logs as $log)
								<tr>
									<td>{{ $loop->index + 1 }}.</td>
									<td class="text-muted">
										{{ $log->subject }}
									</td>
									<td>
										{{ $log->method }}
									</td>
									<td class="text-muted">
										{{ $log->ip }}
									</td>
									{{-- <td class="text-muted">
										{{ $log->agent }}
									</td> --}}
									<td class="text-muted">
										{{ $log->user_id }}
									</td>
									<td class="text-center">
										<form id="delete-form-{{ $log->id }}" method="post" action="{{ route('aktivitas.destroy',$log->id) }}" style="display: none">
											{{ csrf_field() }}
											{{ method_field('DELETE') }}
										</form>
										<a href="" onclick="
											if(confirm('Are you sure, You Want to delete this?'))
											{
											event.preventDefault();
											document.getElementById('delete-form-{{ $log->id }}').submit();
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
	$(document).ready(function() {
		$('#example1').DataTable({
			"dom": '<".card-body border-bottom py-3"<".d-flex"<".text-muted"l><".ms-auto text-muted"f>>>t<".card-footer d-flex align-items-center"<".m-0 text-muted"i><".pagination m-0 ms-auto"p>><"clear">'
		});
	});
</script>
@endsection