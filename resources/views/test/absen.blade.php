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
<h2 class="center">Absen Dulu Yuk!</h2>
<br>
<div class="container">
    <div class="row">
        <form action="{{ route('test.absen') }}" method="POST">
            @method('post')
            @csrf
            <div class="row">
                <div class="col s12">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="TekSis" type="number" class="validate @error('tensi') invalid @enderror" name="tensi" value="{{ old('tensi') }}">
                            <label for="TekSis">Tekanan Sistolik</label>
                            @error('tensi')
                                <p class="red-text">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="input-field col s6">
                            <input id="TekDias" type="number" class="validate @error('tensi2') invalid @enderror" name="tensi2" value="{{ old('tensi2') }}">
                            <label for="TekDias">Tekanan Diastolik.</label>
                            @error('tensi2')
                                <p class="red-text">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="input-field col s12">
                                <input id="BBin" type="number" class="validate @error('berat_badan') invalid @enderror" name="berat_badan" value="{{ old('berat_badan') }}">
                                <label for="BBin">Berat Badan</label>
                                @error('berat_badan')
                                    <p class="red-text">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col s12">
                            <div class="input-field col s12">
                                <input id="TBin" type="number" class="validate @error('tinggi_badan') invalid @enderror" name="tinggi_badan" value="{{ old('tinggi_badan') }}">
                                <label for="TBin">Tinggi Badan</label>
                                @error('tinggi_badan')
                                    <p class="red-text">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn light-blue lighten-1" type="submit">Absen!</button>
            </div>
        </form>
    </div>
</div>
@endsection
