<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'u_id', 'id');
    }

    public function video()
    {
        return $this->belongsTo('App\Models\VideoContent', 'v_id', 'id');
    }

    public static function addVideo(VideoContent $video){
        $user = auth()->user();
        History::create([
            'u_id' => $user->id,
            'v_id' => $video->id
        ]);
    }
}
