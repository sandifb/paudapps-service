<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardCover extends Model
{
    use HasFactory;

    protected $fillable = [
        'color_id',
        'caption',
        'cover_image',
    ];


    public function user_cards()
    {
        return $this->hasMany('App\Models\UserCard');
    }

}
