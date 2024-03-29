<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'comment_id',
        'reply',
        'img_url',
    ];

    public function comment(): BelongsTo
    {
        return $this->belongsTo(Comment::class);
    }


}
