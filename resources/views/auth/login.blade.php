@extends('layout.app')

@section('content')
    <div class="container">
        <div class="column col-5 col-mx-auto">
            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="form-label">E-Mail Address</label>
                    <input id="email" type="email" class="form-input" name="email" value="{{ old('email') }}" required >

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" type="password" class="form-input" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group">
                    <label class="form-checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 
                        <i class="form-icon"></i>Remember Me
                    </label>
                </div>

                <div class="form-group">
                        <button type="submit" class="btn btn-alabama">
                            Login
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Forgot Your Password?
                        </a>
                </div>
            </form>  
        </div>
    </div>
@endsection
