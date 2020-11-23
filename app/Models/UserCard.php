<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserCard extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'card_cover_id',
        'caption',
        'is_protect',
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function card_cover()
    {
        return $this->belongsTo('App\Models\CardCover');
    }

    public function user_card_lists()
    {
        return $this->hasMany('App\Models\UserCardList');
    }

}
