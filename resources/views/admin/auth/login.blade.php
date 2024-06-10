@extends('admin.layout.auth')

@section('content')

<div class="login-form">
    <div class="text-center">
        <h3 class="title">Sign In</h3>
        <p>Sign in to your account to start using Our Solution</p>
    </div>
    <form role="form" method="POST" action="{{ url('/admin/login') }}" enctype="multipart/form-data">
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
        <div class="form-row d-flex justify-content-between mt-4 mb-2">
            <div class="mb-4">
                <div class="form-check custom-checkbox mb-3">
                    <input type="checkbox" class="form-check-input" id="customCheckBox1" >
                    <label class="form-check-label" for="customCheckBox1">Remember my preference</label>
                </div>
            </div>
            <div class="mb-4">
                <a href="{{ url('/admin/password/reset') }}" class="btn-link text-primary">Forgot Password?</a>
            </div>
        </div>
        <div class="text-center mb-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
    </form>
</div>

@endsection