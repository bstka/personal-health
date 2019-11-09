<?php

namespace App;
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
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'jenis_kelamin', 'tanggal_lahir', 'telp'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function userdata()
    {
        return $this->hasOne(UserData::class);
    }
}
