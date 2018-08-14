@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-center" style="background-color: #f2f2ea;">{{ __('LOGIN TO GET STARTED') }}</div>

                <div class="card-body">
                  <div class="row">
                    <div class="col-md-6 border-right">
                      <p class="text-muted text-center">New user</p>
                      <a class="btn btn-primary form-control border-0 mb-2" href="{{url('/login/github')}}" style="background:#333;font-size:24px;"><span class="fab fa-github-square"></span></a>
                      <a class="btn btn-primary form-control border-0 mb-2" href="{{url('/login/linkedin')}}" style="background:#0077B5;font-size:24px;"><span class="fab fa-linkedin-in"></span></a>
                      <a class="btn btn-primary form-control border-0 mb-2" href="{{url('/login/facebook')}}" style="background:#3B5998;font-size:24px;"><span class="fab fa-facebook-f"></span></a>
                      <a class="btn btn-primary form-control border-0 mb-2" href="{{url('/login/twitter')}}" style="background:#1da1f2;font-size:24px;"><span class="fab fa-twitter"></span></a>
                    </div>
                    <div class="col-md-6 border-left">
                      <p class="text-muted text-center">Already have an account?</p>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('EMail:') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password:') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            </div>

                        </form>
                      </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
