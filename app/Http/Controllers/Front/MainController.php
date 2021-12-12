<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\Notifies;
use App\Models\User;
use App\Models\VideoContent;
use App\Models\Subscriber;
use App\Models\ContinueWatch;
use App\Models\VideoLike;
use App\Models\View;
use App\Models\SearchKeywords;
use App\Models\Playlist;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index(Request $request)
    {
        $keywords = [];
        $user = auth()->user();
        $user_id = $user->id;
        $viewCount = View::get();
        $searchkeywords= SearchKeywords::select('keywords')->get();
        //dd($searchkeywords);
        if(!empty($searchkeywords)){
            foreach($searchkeywords as $value)
            {
                array_push($keywords,$value);
            }
            //dd($keywords);
        }
        /*if(!empty($viewCount)){
            $recommendedVideos = VideoContent::with('views')->inRandomOrder()->limit(8)->get();
        }
        $recommendedVideos = VideoContent::distinct('title')->inRandomOrder()->limit(8)->get();*/

        //Get Recommended videos
        $recommendedVideos = VideoContent::recommended();
        
        // if (!empty($SearchKeywords)) {
        //     $v_ids = VideoContent::with('user')->select("id")
        //         ->where("title", "LIKE", "%{$request->get('q')}%")
        //         ->pluck('id');

        //     $recommendedVideos = VideoContent::with(['views', 'user', 'continueWatches'])->whereIn('id', $v_ids)->inRandomOrder()->limit(8)->get();
        // }
        // if(!empty($viewCount)){
        //     $recommendedVideos = VideoContent::with('views')->inRandomOrder()->limit(8)->get();
        // }
        // $recommendedVideos = VideoContent::distinct('title')->inRandomOrder()->limit(8)->get();


        $subscriptions = Subscriber::where('subscriber_id', '=', $user->id)->orderBy('created_at', 'asc')->pluck('account_id');
        $watchlistVideos = VideoContent::with(['views', 'user', 'continueWatches'])->wherein('u_id', $subscriptions)->inRandomOrder()->get();
        
        $contWatches = ContinueWatch::where('u_id', $user_id)->orderBy('updated_at', 'desc')->pluck('v_id');
        $contWatchesVideos = VideoContent::with(['views', 'user', 'continueWatches'])->wherein('id', $contWatches)->inRandomOrder()->get();

        $trendingVideos = DB::table('video_contents')
            ->join('continue_watches', 'video_contents.id', '=', 'continue_watches.v_id')
            ->select('v_id', DB::raw('count(continue_watches.id) as count'))
            ->groupBy('v_id')
            ->orderBy('count', 'desc')
            ->get();

        foreach ($trendingVideos as $key => $video) {
            $record = VideoContent::with(['views', 'user', 'continueWatches'])
                ->where('id', $video->v_id)
                ->get()->first();
            $video->record =  $record;
        }

        return view('front.index', compact(['user', 'recommendedVideos', 'watchlistVideos', 'contWatchesVideos', 'trendingVideos']));
    }

    public function playVideo(Request $request, $id)
    {
        $sort_comments = $request->sort_comments;
        $current_video = VideoContent::with(['continueWatches'])->where('id', $id)->get()->first();
        $like = VideoLike::where('video_id', $id)->where('user_id', Auth::id())->first();

        //Get suggested video based on current video.
        $suggestedVideos = $current_video->suggested();

        //Add video view to history
        History::addVideo($current_video);

        $playlists = Playlist::where('u_id', Auth::id())->get();

        return view('front.play', compact(['current_video', 'like','suggestedVideos', 'playlists', 'sort_comments']));
    }

    public function library()
    {
        $user = auth()->user();
        if ($user === null) {
            return response()->json(['message' => 'User not authenticated'], 403);
        }
        $user_id = $user->id;

        //use this one if you update the time instead of inserting a new row each time a time is saved.
        $historyVideos = ContinueWatch::with(['video'])->where('u_id', $user_id)->orderBy('updated_at', 'desc')->limit(8)->get();
        // dd($historyVideos);

        return view('front.library', compact(['user', 'historyVideos']));
    }

    public function history()
    {
        $user = auth()->user();
        if ($user === null) {
            return response()->json(['message' => 'User not authenticated'], 403);
        }
        $user_id = $user->id;

        //use this one if you update the time instead of inserting a new row each time a time is saved.
        $historyVideos = ContinueWatch::with(['video'])->where('u_id', $user_id)->orderBy('updated_at', 'desc')->get();
        // dd($historyVideos);

        return view('front.history', compact(['user', 'historyVideos']));
    }

    public function playlists()
    {
        $user = auth()->user();
        if ($user === null) {
            return response()->json(['message' => 'User not authenticated'], 403);
        }
        $user_id = $user->id;

        $playlists = Playlist::where('u_id', Auth::id())->get();

        return view('front.playlists', compact(['user', 'playlists']));
    }
    public function notifications()
    {
        return auth()->user()->unreadNotifications()->limit(5)->get()->toArray();
    }

    public function notifies()
    {
        $userID = auth()->id();
        $user = User::with('notifications')->find(auth()->id());

        // return $user->notifications[0]->notification_by_id;
        return view('front.notifications', compact(['user']));
    }

    public function trending()
    {
        $user = auth()->user();

        $trendingVideos = DB::table('video_contents')
            ->join('continue_watches', 'video_contents.id', '=', 'continue_watches.v_id')
            ->select('v_id', DB::raw('count(continue_watches.id) as count'))
            ->groupBy('v_id')
            ->orderBy('count', 'desc')
            ->get();

        // dd($trendingVideos);

        foreach ($trendingVideos as $key => $video) {
            // echo $key;
            $record = VideoContent::with(['views', 'user', 'continueWatches'])
                ->where('id', $video->v_id)
                ->get()->first();

            $video->record =  $record;
        }
        // dd('OK'); 
        // dd($trendingVideos);
        return view('front.trending', compact(['user', 'trendingVideos']));
    }
    // public function test()
    // {

    //     $user = User::with('subscribers')->find(auth()->id());

    //     foreach ($user->subscribers as $subscriber) {
    //         $notification = new Notifies();
    //         $notification->notification_by_id = $user->id;
    //         $notification->notification_to_id = $subscriber->id;
    //         $notification->message = $user->name  . ' has posted a new video';
    //         $notification->save();
    //     }
    // }
}