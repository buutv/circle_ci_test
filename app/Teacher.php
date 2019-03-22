<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Teacher extends Authenticatable
{
    use Notifiable;

    protected $table = 'teachers';

    protected $fillable = ['email',  'password'];

    protected $hidden = ['password',  'remember_token'];


}
