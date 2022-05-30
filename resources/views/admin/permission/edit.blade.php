@extends('admin._partials.app')
@section('title') Permissions @endsection
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
				<form class="card" role="form" action="{{ route('permission.update',$permission->id) }}" method="post">
					{{ csrf_field() }}
					{{ method_field('PUT') }}
					<div class="card-header">
						<h4 class="card-title">Sunting Permission</h4>
					</div>
					@include('includes.messages')
					<div class="card-body">
						<div class="row">
							<div class="col-xl-12">
								<div class="row">
									<div class="col-md-12 col-xl-12">
										<div class="mb-3">
											<label class="form-label" for="name">Permission</label>
											<input type="text" class="form-control" id="name" name="name"
												placeholder="Permission" value="{{ $permission->name }}">
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<div class="d-flex">
							<a href="{{ route('permission.index') }}" class="btn btn-secondary">Batal</a>
							<button type="submit" class="btn btn-success ms-auto">Simpan</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</section>
</div>
@endsection