@extends('layout.app')

@section('content')
    <div class="container">
        <div class="column col-8 col-mx-auto">
            <div class="text-center">
                <h3>Register Yourself</h3>
                <h5>Benefits Will Come</h5>
            </div>

            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name" class="form-label">Name</label>
                    <input id="name" type="text" class="form-input" name="name" value="{{ old('name') }}" required autofocus>

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="form-label">E-Mail Address</label>
                    <input id="email" type="email" class="form-input" name="email" value="{{ old('email') }}" required>

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
                    <label for="password-confirm" class="form-label">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-alabama">
                            Register
                    </button>
                </div>
            </form>  
        </div>
    </div>      
@endsection
