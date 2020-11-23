<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCardList extends Model
{
    use HasFactory;

    protected $fillable = [
        'content_id',
        'user_card_id',
    ];

    public function content()
    {
        return $this->belongsTo('App\Models\Content');
    }

    public function user_card()
    {
        return $this->belongsTo('App\Models\UserCard');
    }



}
