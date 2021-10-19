@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <form method="POST" action="{{ route('loginSubmit') }}">
                        @csrf
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input type="text" placeholder="Email" id="email" class="form-control" name="email" required
                                autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif

                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" placeholder="Password" id="password" class="form-control"
                                name="password" required>
                            @if ($errors->has('password'))
                                <span class="text-danger">{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group mb-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-block">Signin</button>
                        </div>
                        <div class="form-group text-center">
                            <a href="{{ route('user.reset') }}">Forgot Password</a>
                        </div>
                        <!--<div class="alt-auth">-->
                        <!--    <p>Dont have an account? <a href="{{ route('register') }}">Sign up</a></p>-->
                        <!--</div>-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
