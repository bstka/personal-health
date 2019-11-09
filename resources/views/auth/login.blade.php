@extends('layouts.app')
/*

 ______     __     ______     ______   ______     __  __     ______
/\  == \   /\ \   /\  ___\   /\__  _\ /\  __ \   /\ \/ /    /\  __ \
\ \  __<   \ \ \  \ \___  \  \/_/\ \/ \ \  __ \  \ \  _"-.  \ \  __ \
 \ \_____\  \ \_\  \/\_____\    \ \_\  \ \_\ \_\  \ \_\ \_\  \ \_\ \_\
  \/_____/   \/_/   \/_____/     \/_/   \/_/\/_/   \/_/\/_/   \/_/\/_/

    https://github.com/BisTaka
    https://duniacoder.com
    https://bistaka.github.com



*/
@section('content')
<div class="container">
    {{--  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  --}}
    <br>
    <br>
    <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="col s12">
            <div class="row">
                <div class="col s4"></div>
                <div class="col s4">
                    <div class="card hoverable">
                        <div class="card-content center">
                            <span class="card-title">Masuk</span>
                            <br>
                            <div class="row">
                                <div class="input-field">
                                    <input id="email" type="email" class="@error('email') invalid @enderror" value="{{ old('email') }}" name="email" autofocus required>
                                    <label for="email">Email</label>
                                </div>
                                @error('email')
                                    <small style="color: #f44336;">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="input-field">
                                    <input id="password" type="password" class="@error('password') invalid @enderror" name="password" autofocus>
                                    <label for="password">Password</label>
                                </div>
                                @error('password')
                                    <small style="color: #f44336;">{{ $message }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="card-action">
                            <button class="btn light-blue lighten-2" type="submit">Masuk!</button>
                            <a href="{{ route('password.request') }}" class="btn white" style="color: #29b6f6;">Lupa Password?</a>
                        </div>
                    </div>
                </div>
                <div class="col s4"></div>
            </div>
        </div>
    </form>
</div>
@endsection
