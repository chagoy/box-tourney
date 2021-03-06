@extends('layout.app')

@section('content')
<div class="container">
    <h3>Reset your password</h3>
    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
        {{ csrf_field() }}

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class=" form-label">E-Mail Address</label>

            <input id="email" type="email" class="form-input" name="email" value="{{ $email or old('email') }}" required autofocus>

            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class=" form-label">Password</label>

            <input id="password" type="password" class="form-input" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
            <label for="password-confirm" class=" form-label">Confirm Password</label>
        
            <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required>

            @if ($errors->has('password_confirmation'))
                <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        
        </div>

        <div class="form-group">
                <button type="submit" class="btn btn-primary">
                    Reset Password
                </button>
        </div>
    </form>
</div>
@endsection
