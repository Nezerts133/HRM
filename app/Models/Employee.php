<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Employee extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table = 'employees'; // якщо таблиця не users

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'email',
        'username',
        'password',
        'role',
        'phone',
        'position_id',
        'department_id',
        'status',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
