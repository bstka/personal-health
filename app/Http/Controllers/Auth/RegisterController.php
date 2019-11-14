<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Uuid;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/absen';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')
        /*
                                ___                       ___           ___           ___
     _____        ___          /  /\          ___        /  /\         /__/|         /  /\
    /  /::\      /  /\        /  /:/_        /  /\      /  /::\       |  |:|        /  /::\
   /  /:/\:\    /  /:/       /  /:/ /\      /  /:/     /  /:/\:\      |  |:|       /  /:/\:\
  /  /:/~/::\  /__/::\      /  /:/ /::\    /  /:/     /  /:/~/::\   __|  |:|      /  /:/~/::\
 /__/:/ /:/\:| \__\/\:\__  /__/:/ /:/\:\  /  /::\    /__/:/ /:/\:\ /__/\_|:|____ /__/:/ /:/\:\
 \  \:\/:/~/:/    \  \:\/\ \  \:\/:/~/:/ /__/:/\:\   \  \:\/:/__\/ \  \:\/:::::/ \  \:\/:/__\/
  \  \::/ /:/      \__\::/  \  \::/ /:/  \__\/  \:\   \  \::/       \  \::/~~~~   \  \::/
   \  \:\/:/       /__/:/    \__\/ /:/        \  \:\   \  \:\        \  \:\        \  \:\
    \  \::/        \__\/       /__/:/          \__\/    \  \:\        \  \:\        \  \:\
     \__\/                     \__\/                     \__\/         \__\/         \__\/
        */;

        /*
        https://github.com/BisTaka
        https://duniacoder.com
        https://bistaka.github.com
        */
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'telp' => ['required', 'unique:users,telp'],
            'jenis_kelamin' => ['required', 'in:L,P'],
            'tanggal_lahir' => ['required'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'id' => Uuid::uuid4()->toString(),
            'name' => $data['name'],
            'email' => $data['email'],
            'username' => $data['username'],
            'telp' => $data['telp'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
