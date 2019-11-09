<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticated(Request $request,User $user)
    {
        $user_name = Auth::user()->name;
        // $request->session()->with('success','Proses Masuk Berhasil');
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
        return redirect('/absen')->with('info', 'Ayo Cek Badanmu '.$user_name.'!');
    }
}
