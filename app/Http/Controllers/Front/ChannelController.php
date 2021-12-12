<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Notifies;
use App\Models\Playlist;
use App\Models\Subscriber;
use App\Models\User;
use App\Models\VideoContent;
use App\Models\VideoLike;
use App\Models\VideoPlaylist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChannelController extends Controller
{

    public function index($id)
    {
        $user = User::with(['videos', 'playlists', 'subscribers', 'profile'])->find($id);
        // return $user;
        return view('front.channel', compact(['user']));
    }

    public function subscribe($id)
    {
        $subscriber = new Subscriber;
        $subscriber->subscriber_id = auth()->id();
        $subscriber->account_id = $id;
        if ($subscriber->save()) {

            $notification = new Notifies;
            $notification->notification_by_id = auth()->id();
            $notification->notification_to_id = $id;
            $notification->message = auth()->user()->name . 'has started following you';
            $notification->save();

            // $user->notify(new UserFollowed(auth()->user()));

            return redirect()->back()->with('success', 'Subscribed');
        }
    }

    public function changeNotificationSettings($subscriberId, $accountID)
    {
        $subscriber = Subscriber::where('account_id', $accountID)
            ->where('subscriber_id', $subscriberId)->first();

        $subscriber->update([
            'notifications' => $subscriber->notifications ? 0 : 1
        ]);

        return redirect()->back();
    }

    public function videoLike($videoid)
    {
        $videoAuthor = VideoContent::find($videoid)->u_id;
        $video = new VideoLike();
        $video->user_id = auth()->id();
        $video->video_id = $videoid;
        if ($video->save()) {
            $notification = new Notifies;
            $notification->notification_by_id = auth()->id();
            $notification->notification_to_id = $videoAuthor;
            $notification->message = auth()->user()->name . ' has started following you';
            $notification->save();
            return redirect()->back();
        }
    }
    public function videoDislike($videoid)
    {
        $videoAuthor = VideoLike::where('video_id', $videoid)->where('user_id', Auth::id())->first();
        $videoAuthor->delete();
        return redirect()->back();
    }

    public function unsubscribe($subscriberId, $accountID)
    {
        $subscriber = Subscriber::where('account_id', $accountID)->where('subscriber_id', $subscriberId)->first();
        $subscriber->delete();
        return redirect()->back();
    }

    public function playlist($id)
    {
        $playlist = Playlist::with('videos')->find($id);
        // return $playlist;

        return view('front.playlist', compact(['playlist']));
    }

    public function createPlaylist($id)
    {

        $user = User::find($id);
        return view('front.create-playlist', compact(['user']));
    }

    public function storePlaylist(Request $request, $id)
    {
        // return $requset->all();
        $playlist = new Playlist;
        $playlist->u_id = $id;
        $playlist->playlist_name = $request->playlist_name;
        $playlist->save();

        return redirect()->back()->with('success', 'Playlist created successfully');
    }

    public function assignVideoToPlaylistView($id)
    {
        $playlist = Playlist::find($id);
        $videos = VideoContent::where('u_id', auth()->id())->with('playlists')->get();
        return view('front.assign-video', compact(['playlist', 'videos']));
    }

    public function assignVideoToPlaylist(Request $request, $id)
    {
        $playlist = Playlist::find($id);
        $playlist->videos()->attach($request->videos);
        return redirect()->back()->with('success', 'Videos assigned successfully');
        // return $requset->all();
    }

    public function saveVideoToPlaylist(Request $request, $id)
    {
        VideoPlaylist::updateOrCreate([
            'video_id' => $request->video_id,
            'playlist_id' => $id
        ], [
            'video_id' => $request->video_id,
            'playlist_id' => $id
        ]);

        return redirect()->back()->with('success', 'Videos assigned successfully');
    }
}