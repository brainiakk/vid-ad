<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = ['tag_name'];

    public function videos()
    {
        return $this->belongsToMany('App\Models\VideoContent', 'video_tags', 'tag_id', 'video_id', 'id');
    }
}
