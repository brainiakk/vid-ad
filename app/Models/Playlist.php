<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'u_id', 'id');
    }

    public function videos()
    {
        return $this->belongsToMany('App\Models\VideoContent', 'video_playlists', 'video_id', 'playlist_id', 'id');
    }
}
