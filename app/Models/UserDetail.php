<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'avatar',
        'phone_number',
        'subscription_level',
        'subscription_ended',
        'pin',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


}
