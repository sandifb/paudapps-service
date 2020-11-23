<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'code',
        'thumbnail',
        'type',
        'is_free',
        'status',
        'status_monites',
        'view',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function content_play_lists()
    {
        return $this->hasMany('App\Models\ContentPlayList');
    }




}
