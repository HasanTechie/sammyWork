<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Institute extends Authenticatable
{
    use Notifiable;
    protected $guard = 'institute';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password', 'partner_institute_name', 'partner_institute_id', 'first_name', 'last_name', 'contact', 'vicechancellor_email', 'registrar_email', 'is_email_verified', 'is_active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
