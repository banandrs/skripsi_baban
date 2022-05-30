@extends('admin._partials.app')
@section('title') Role User @endsection
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
				<form class="card" role="form" action="{{ route('role.store') }}" method="post">
					@csrf
					<div class="card-header">
						<h4 class="card-title">Tambah Role</h4>
					</div>
					@include('includes.messages')
					<div class="card-body">
						<div class="row">
							<div class="col-xl-12">
								<div class="row">
									<div class="col-md-12 col-xl-12">
										<div class="mb-3">
											<label class="form-label" for="name">Role title</label>
											<input type="text" class="form-control" id="name" name="name"
												placeholder="Role title">
										</div>
										<div class="row">
											<div class="col-lg-6">
												<label for="permission[]">Admin Permissions</label>
												@foreach ($permissions as $permission)
												@if ($permission->for == 'admin')
												<label class="form-check">
													<input class="form-check-input" type="checkbox" name="permission[]"
														value="{{ $permission->id }}">
													<span class="form-check-label">{{ $permission->name
														}}</span>
												</label>
												@endif
												@endforeach
											</div>
											<div class="col-lg-6">
												<label for="permission[]">Manajer Permissions</label>
												@foreach ($permissions as $permission)
												@if ($permission->for == 'manajer')
												<label class="form-check">
													<input class="form-check-input" type="checkbox" name="permission[]"
														value="{{ $permission->id }}">
													<span class="form-check-label">{{ $permission->name
														}}</span>
												</label>
												@endif
												@endforeach
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="d-flex">
							<a href="{{ route('role.index') }}" class="btn btn-secondary">Batal</a>
							<button type="submit" class="btn btn-success ms-auto">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@endsection