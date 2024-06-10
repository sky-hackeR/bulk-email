@extends('admin.layout.auth')

@section('content')

<div class="login-form">
    <div class="text-center">
        <h3 class="title">Reset Password</h3>
        <p>Reset Password to gain access to Our Solution</p>
    </div>
    <form role="form" method="POST" action="{{ url('/admin/password/reset') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-4 {{ $errors->has('email') ? ' has-error' : '' }}">
            <label class="mb-1 text-dark">Email</label>
            <input type="email" class="form-control form-control" name="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="mb-4 position-relative {{ $errors->has('password') ? ' has-error' : '' }}">
            <label class="mb-1 text-dark">Password</label>
            <input type="password" id="dz-password" name="password" class="form-control" value="{{ old('password') }}" >

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif

            <span class="show-pass eye">
            
                <i class="fa fa-eye-slash"></i>
                <i class="fa fa-eye"></i>
            
            </span>
        </div>

        <div class="mb-4 position-relative {{ $errors->has('password-confirm') ? ' has-error' : '' }}">
            <label class="mb-1 text-dark">Confirm Password</label>
            <input type="password-confirm" id="password-confirm" name="password-confirm" class="form-control" value="{{ old('password-confirm') }}" >

            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>
        <div class="text-center mb-4">
            <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
        </div>
    </form>
</div>

@endsection
