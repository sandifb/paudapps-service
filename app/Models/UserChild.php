<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChild extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'child_name',
        'avatar_id',
        'age_level',
        'with_time',
        'time_seconds',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function avatar()
    {
        return $this->belongsTo('App\Models\Avatar');
    }


}
