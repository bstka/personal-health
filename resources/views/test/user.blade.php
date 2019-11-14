@extends('layouts.app')

@section('content')
<h2 class="center">Pengaturan User</h2>
<br>
<div class="container">
    <div class="row">
        <form class="col s12" action="{{ route('register') }}" method="POST">
            @csrf
            <div class="row">
                <div class="input-field col s6 ">
                    <input id="NL" type="text" class="validate @error('name') invalid @enderror" name="name"
                        value="{{ $data->name }}">
                    <label for="NL">Nama Lengkap</label>
                    @error('name')
                    <p class="red-text">{{ $message }}</p>
                    @enderror
                </div>
                <div class="input-field col s6">
                    <input id="UN" type="text" class="validate @error('username') invalid @enderror" name="username"
                        value="{{ $data->username }}">
                    <label for="UN">Username</label>
                    @error('username')
                    <p class="red-text" $message }}</p> @enderror </div> </div> <div class="row">
                        <div class="input-field col s12">
                            <input type="email" class="validate @error('email') invalid @enderror"
                                placeholder="contoh@contoh.com" id="email" name="email" value="{{ $data->email }}">
                            <label for="email">Email</label>
                            @error('email')
                            <p class="red-text">{{ $message }}</p>
                            @enderror
                        </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" class="validate @error('telp') invalid @enderror" id="telp" name="telp"
                            value="{{ $data->telp }}">
                        <label for="telp">No.telp</label>
                        @error('telp')
                        <p class="red-text">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s6">
                        <select name="jenis_kelamin">
                            @foreach ($sx as $kel)
                            <option value="{{ $kel }}" {{ $kel == $data->jenis_kelamin ? 'selected' : '' }}>{{ $kel == 'L' ? 'Laki-Laki' : 'Perempuan' }}</option>
                            @endforeach
                        </select>
                        <label>Jenis Kelamin</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="datetime" class="validate datepicker @error('tanggal_lahir') invalid @enderror"
                            id="ttl" name="tanggal_lahir" value="{{ $data->tanggal_lahir }}">
                        <label for="ttl">Tanggal Lahir</label>
                        @error('tanggal_lahir')
                        <p class="red-text">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" class="validate @error('password') invalid @enderror" id="password"
                            name="password">
                        <label for="password">Password</label>
                        @error('password')
                        <p class="red-text">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <input type="password" class="validate @error('password_confirmation') invalid @enderror"
                            id="password-con" name="password_confirmation">
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
