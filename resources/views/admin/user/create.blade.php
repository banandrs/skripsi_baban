@extends('admin._partials.app')
@section('title')
User
@stop
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
        <form class="card" role="form" action="{{ route('user.store') }}" method="post">
          {{ csrf_field() }}
          <div class="card-header">
            <h4 class="card-title">Tambah User</h4>
          </div>
          @include('includes.messages')
          <div class="card-body">
            <div class="row">
              <div class="col-xl-12">
                <div class="row">
                  <div class="col-md-12 col-xl-12">
                    <div class="mb-3">
                      <label class="form-label" for="name">Username</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Username"
                        value="{{ old('name') }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="email">Email</label>
                      <input type="text" class="form-control" id="email" name="email" placeholder="Email"
                        value="{{ old('email') }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="phone">Phone</label>
                      <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"
                        value="{{ old('phone') }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="password">Password</label>
                      <input type="password" class="form-control" id="password" name="password" placeholder="Password"
                        value="{{ old('password') }}">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="password_confirmation">Confirm password</label>
                      <input type="password" class="form-control" id="password_confirmation"
                        name="password_confirmation" placeholder="Confirm password">
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="status">Status</label>
                      <label class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="status" @if (old('status')==1) checked
                          @endif value="1">
                        <span class="form-check-label">Status</span>
                      </label>
                    </div>
                    <div class="mb-3">
                      <label class="form-label" for="role[]">Assign Role</label>
                      @foreach ($roles as $role)
                      <label class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="role[]" value="{{ $role->id }}">
                        <span class="form-check-label">{{ $role->name }}</span>
                      </label>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer">
            <div class="d-flex">
              <a href="{{ route('user.index') }}" class=" btn btn-secondary">Batal</a>
              <button type="submit" class="btn btn-success ms-auto">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  </section>
</div>
</div>
@endsection