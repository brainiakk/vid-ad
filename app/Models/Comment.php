<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $table = "videos_comments";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id', 'id');
    }

    public function replies()
    {
        return $this->hasMany('App\Models\Comment', 'parent_id');
    }

    public function likes()
    {
        return $this->hasMany("App\Models\CommentLike", 'comment_id', 'id');
    }
}
