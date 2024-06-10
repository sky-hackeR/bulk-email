@extends('admin.layout.auth')

<!-- Main Content -->
@section('content')


<div class="login-form">
    <div class="text-center">
        <h3 class="title">Forgot password</h3>
        <p>Sign in to your account to start using Our Solution</p>
    </div>
    <form role="form" method="POST" action="{{ url('/admin/password/email') }}">
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
        <div class="form-row d-flex justify-content-between mt-4 mb-2">
            <div class="mb-4">
                <div class="form-check custom-checkbox mb-1">
                    <input type="checkbox" class="form-check-input" id="customCheckBox1" required="">
                    <label class="form-check-label" for="customCheckBox1">Remember my preference</label>
                </div>
            </div>
            <div class="mb-4">
                <a href="{{ url('/admin/login') }}" class="btn-link text-primary">Remember Password?</a>
            </div>
        </div>
        <div class="text-center mb-4">
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </div>
    </form>
</div>


@endsection
