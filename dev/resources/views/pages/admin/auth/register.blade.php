@extends('layouts.admin')

@section('content-title', 'Register')

@section('components-container', '')

@section('content-body')
  <div class="col-auto">
    <div class="card card--account-form">
      <div class="card-header">Register</div>

      <div class="card-body">
        <form class="form-horizontal" method="POST" action="{{ route('admin.register.submit') }}">
          {{ csrf_field() }}

          <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name" class="col-md control-label">Name</label>

            <div class="col-md">
              <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required
                     autofocus>

              @if ($errors->has('name'))
                <span class="help-block">
                  <strong>{{ $errors->first('name') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md control-label">E-Mail Address</label>

            <div class="col-md">
              <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

              @if ($errors->has('email'))
                <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md control-label">Password</label>

            <div class="col-md">
              <input id="password" type="password" class="form-control" name="password" required>

              @if ($errors->has('password'))
                <span class="help-block">
                  <strong>{{ $errors->first('password') }}</strong>
                </span>
              @endif
            </div>
          </div>

          <div class="form-group">
            <label for="password-confirm" class="col-md control-label">Confirm Password</label>

            <div class="col-md">
              <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
          </div>

          <div class="form-group">
            <div class="col-md">
              <button type="submit" class="btn btn-primary">
                Register
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
@endsection
