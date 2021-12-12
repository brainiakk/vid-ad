<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoTag extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "video_tags";

    public function tag_name()
    {
        return $this->hasMany('App\Models\Tags', 'id', 'tag_id');
    }
}