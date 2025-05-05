<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacation extends Model
{
    protected $table = 'vacations';

    protected $fillable = [
        'employee_id', 'type', 'start_date',
        'end_date', 'status', 'comment'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
