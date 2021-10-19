@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="Absolute-Center is-Responsive">
                <div id="logo-container"></div>
                <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <form method="POST" action="{{ route('passReset') }}">
                        @csrf
                        <div class="form-group input-group">
                            <input type="hidden" placeholder="Email" id="email" class="form-control" name="email" value="{{ $email }}" required autofocus>
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
                        </div>
                        @if ($errors->has('email'))
                            <p><span class="text-danger">{{ $errors->first('email') }}</span></p>
                        @endif
                        @if ($errors->has('password'))
                            <p><span class="text-danger">{{ $errors->first('password') }}</span></p>
                        @endif
                        @if ($errors->has('password_confirmation'))
                            <p><span class="text-danger">{{ $errors->first('password_confirmation') }}</span></p>
                        @endif
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark btn-block">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
