<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Employee extends Authenticatable
{
    protected $table = 'employees';

    protected $fillable = [
        'first_name', 'last_name', 'middle_name', 'birth_date', 'gender',
        'email', 'phone', 'address', 'passport_number', 'tax_number',
        'position_id', 'department_id', 'employment_date', 'dismissal_date',
        'status', 'username', 'password_hash', 'role', 'photo'
    ];

    protected $hidden = ['password_hash'];

    public function getAuthPassword()
    {
        return $this->password_hash;
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function documents()
    {
        return $this->hasMany(Document::class);
    }

    public function vacations()
    {
        return $this->hasMany(Vacation::class);
    }

    public function logs()
    {
        return $this->hasMany(Log::class, 'user_id');
    }
}
