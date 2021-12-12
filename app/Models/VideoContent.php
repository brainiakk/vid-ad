<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class VideoContent extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'title',
        'description',
        'video',
        'videoname',
        'video_path',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo('App\Models\Category')->withDefault(function ($data) {
            foreach ($data->getFillable() as $dt) {
                $data[$dt] = __('Deleted');
            }
        });
    }
    public function continueWatches()
    {
        $user = Auth::user();
        // return $user; 
        $comments = $this->hasMany('App\Models\ContinueWatch', 'v_id', 'id')->where('u_id', $user->id)->latest();
        return $comments;
    }

    public function views()
    {
        return  $this->hasMany('App\Models\ContinueWatch', 'v_id', 'id')->latest();
        // return $this->hasMany('App\Models\ContinueWatch', 'v_id', 'id')->get();        
        // return $this->hasMany('App\Models\View', 'v_id', 'id');
    }

    public function messages()
    {
        return $this->hasMany(Chats::class, 'video_id', 'id');
    }

    public function histories()
    {
        return $this->hasMany('App\Models\History', 'v_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'u_id', 'id');
    }

    public function playlists()
    {
        return $this->belongsToMany('App\Models\Playlist', 'video_playlists', 'video_id', 'playlist_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'video_id', 'id')->whereNull('parent_id');
    }
    public function video_tags()
    {
        return $this->hasMany('App\Models\VideoTag', 'video_id', 'id');
    }

    public static function recommended(){
        $user = auth()->user();
        if(!isset($user->id))
            return VideoContent::distinct('title')->inRandomOrder()->limit(8)->get();

        $user_id = $user->id;
        $recentlyViewed = History::where('u_id', $user->id)
            ->with(['video.category', 'video.video_tags'])
            ->latest()
            ->take(5)
            ->get();

        $titles = $recentlyViewed->pluck('video.title')->toArray();
        $catIds = $recentlyViewed->pluck('video.category_id')->toArray();
        $tagIds = $recentlyViewed->pluck('video.video_tags.tag_id')->toArray();

        $videoQuery = VideoContent::query();
        $videoQuery->whereIn('category_id', $catIds);
        $videoQuery->whereHas('video_tags', function($q) use($tagIds) {
           $q->whereIn('tag_id', $tagIds);
        });
        foreach ($titles as $title){
            if(!isset($title))
                continue;
            $words = explode(' ',$title);
            foreach ($words as $word){
                $videoQuery->orWhere('title', 'LIKE', '%'.$word.'%');
            }
        }
        return $videoQuery->distinct()->inRandomOrder()->limit(8)->get();
    }

    public function suggested(){
        $catId = $this->category_id;
        $vTags = $this->video_tags;
        $words = explode(" ", $this->title);

        $videoQuery = VideoContent::query();
        $videoQuery->with(['category', 'views', 'user', 'continueWatches', 'video_tags.tag_name']);
        $videoQuery->where('id', '!=', $this->id);
        $videoQuery->where('category_id', $catId);
        if(isset($vTags)){
            $tagIds = $vTags->pluck('tag_id')->toArray();
            $videoQuery->whereHas('video_tags', function($q) use($tagIds) {
                $q->whereIn('tag_id', $tagIds);
            });
        }
        foreach ($words as $word){
            $videoQuery->orWhere('title', 'LIKE', '%'.$word.'%');
        }
        return $videoQuery->inRandomOrder()->limit(5)->get();
    }
}