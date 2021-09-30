@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <form method="POST" action="{{ route('registerSubmit') }}">
                        @csrf
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                autofocus>

                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" placeholder="Password" id="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required>

                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" placeholder="Confirm Password" id="password_confirmation"
                                class="form-control @error('password') is-invalid @enderror" name="password_confirmation"
                                required>
                            @if ($errors->has('email'))
                                <p><span class="text-danger">{{ $errors->first('email') }}</span></p>
                            @endif
                            @if ($errors->has('password'))
                                <p><span class="text-danger">{{ $errors->first('password') }}</span></p>
                            @endif
                            @if ($errors->has('password_confirmation'))
                                <p><span class="text-danger">{{ $errors->first('password_confirmation') }}</span></p>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-block">Sign Up</button>
                        </div>
                        <div class="form-group text-center">
                            <a href="#">Forgot Password</a>
                        </div>
                        <div class="alt-auth">
                            <p>Dont have an account? <a href="#">Sign up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
