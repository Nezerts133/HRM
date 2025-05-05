<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'logs';

    public $timestamps = false;

    protected $fillable = [
        'user_id', 'action', 'target_table', 'target_id', 'timestamp'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'user_id');
    }
}
