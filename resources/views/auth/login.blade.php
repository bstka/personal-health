@extends('layouts.app')
{{-- /*

 ______     __     ______     ______   ______     __  __     ______
/\  == \   /\ \   /\  ___\   /\__  _\ /\  __ \   /\ \/ /    /\  __ \
\ \  __<   \ \ \  \ \___  \  \/_/\ \/ \ \  __ \  \ \  _"-.  \ \  __ \
 \ \_____\  \ \_\  \/\_____\    \ \_\  \ \_\ \_\  \ \_\ \_\  \ \_\ \_\
  \/_____/   \/_/   \/_____/     \/_/   \/_/\/_/   \/_/\/_/   \/_/\/_/

    https://github.com/BisTaka
    https://duniacoder.com
    https://bistaka.github.com



*/ --}}
@section('content')
<div class="container">
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
