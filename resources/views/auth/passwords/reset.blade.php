@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row">
            <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <h4 style="color:#fff;text-align:center;margin-bottom:2rem;">Password Reset</h4>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif

                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-block">Reset</button>
                        </div>
                        <div class="alt-auth">
                            <p>Remember your password? <a href="{{ route('login') }}">Login</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
