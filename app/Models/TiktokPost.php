<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiktokPost extends Model
{
    use HasFactory;

     protected $fillable = [
        'tiktok_id',
        'caption',
        'cover_image_url',
        'share_url',
        'like_count',
        'comment_count',
        'share_count',
        'view_count',
        'posted_at',
    ];

    /**
     * Cast 'posted_at' to a datetime object.
     */
    protected $casts = [
        'posted_at' => 'datetime',
    ];
}
