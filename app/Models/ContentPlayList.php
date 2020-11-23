<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentPlayList extends Model
{
    use HasFactory;

    protected $fillable = [
        'play_list_title',
        'content_id'
    ];

}
