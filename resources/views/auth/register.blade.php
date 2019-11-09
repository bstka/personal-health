@extends('layouts.app')

/*
 ________  ___  ________  _________  ________  ___  __    ________
|\   __  \|\  \|\   ____\|\___   ___\\   __  \|\  \|\  \ |\   __  \
\ \  \|\ /\ \  \ \  \___|\|___ \  \_\ \  \|\  \ \  \/  /|\ \  \|\  \
 \ \   __  \ \  \ \_____  \   \ \  \ \ \   __  \ \   ___  \ \   __  \
  \ \  \|\  \ \  \|____|\  \   \ \  \ \ \  \ \  \ \  \\ \  \ \  \ \  \
   \ \_______\ \__\____\_\  \   \ \__\ \ \__\ \__\ \__\\ \__\ \__\ \__\
    \|_______|\|__|\_________\   \|__|  \|__|\|__|\|__| \|__|\|__|\|__|
                  \|_________|

https://github.com/BisTaka
https://duniacoder.com
https://bistaka.github.com
*/

@section('content')
<div class="container">
    {{--  <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  --}}
    <h3 class="center">Daftar!</h3>
    <br>
    <br>
    <div class="row">
        <form class="col s12" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s6 ">
                    <input id="NL" type="text" class="validate @error('name') invalid @enderror" name="name" value="{{ old('name') }}">
                    <label for="NL">Nama Lengkap</label>
                    @error('name')
                        <p class="red-text">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-field col s6">
                    <input id="UN" type="text" class="validate @error('username') invalid @enderror" name="username" value="{{ old('username') }}">
                    <label for="UN">Username</label>
                    @error('username')
                        <p class="red-text" $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="email" class="validate @error('email') invalid @enderror" placeholder="contoh@contoh.com" id="email" name="email" value="{{ old('email') }}">
                    <label for="email">Email</label>
                    @error('email')
                        <p class="red-text">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="text" class="validate @error('telp') invalid @enderror" id="telp" name="telp" value="{{ old('telp') }}">
                    <label for="telp">No.telp</label>
                    @error('telp')
                        <p class="red-text">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s6">
                    <select name="jenis_kelamin">
                        <option value="" disabled selected>Jenis Kelamin</option>
                        <option value="L">Laki-Laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                    <label>Jenis Kelamin</label>
                </div>
                <div class="input-field col s6">
                    <input type="datetime" class="validate datepicker @error('tanggal_lahir') invalid @enderror" id="ttl" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
                    <label for="ttl">Tanggal Lahir</label>
                    @error('tanggal_lahir')
                        <p class="red-text">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="password" class="validate @error('password') invalid @enderror" id="password" name="password">
                    <label for="password">Password</label>
                    @error('password')
                        <p class="red-text">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input type="password" class="validate @error('password_confirmation') invalid @enderror" id="password-con" name="password_confirmation">
                    <label for="password-con">Konfirmasi Password</label>
                    @error('password_confirmation')
                        <p class="red-text">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <button class="btn waves-effect waves-light light-blue lighten-1" type="submit">Daftar!
            </button>
        </form>
    </div>

</div>
@endsection
@push('scripts')
    $('select').formSelect();
    $('.datepicker').datepicker();
@endpush
