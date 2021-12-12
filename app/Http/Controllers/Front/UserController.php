<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Notifies;
use App\Models\Playlist;
use App\Models\Tags;
use App\Models\User;
use App\Models\UserProfle;
use App\Models\VideoContent;
use App\Models\VideoTag;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index($id)
    {
        $user = auth()->user();
        // return $user;
        return view('front.panel.profile', compact(['user']));
    }

    public function editProfile($id)
    {
        $user = User::find($id);
        return view('front.panel.edit-profile', compact(['user']));
    }

    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;

        if ($request->password != null) {
            $user->password = Hash::make($request->password);
        }

        // dd($user);

        if ($user->save()) {
            // return $user;
            $userProfile = UserProfle::where('u_id', $id)->first();
            if ($userProfile == null) {

                $profile = new UserProfle;
                $profile->u_id = $id;
                $profile->about = $request->about;
                $profile->location = $request->location;

                if ($request->hasFile('profileImage')) {
                    $profileImage = $request->file('profileImage');
                    $profileImageName = time() . '_' . $profileImage->getClientOriginalName();
                    $profileImagePath = public_path() . '/uploads/profile-image/';
                    $profileImage->move($profileImagePath, $profileImageName);

                    $profile->profile_image = '/uploads/profile-image/' . $profileImageName;
                }

                if ($request->hasFile('cover')) {
                    $coverImage = $request->file('cover');
                    $coverImageName = time() . '_' . $coverImage->getClientOriginalName();
                    $coverImagePath = public_path() . '/uploads/profile-cover/';
                    $coverImage->move($coverImagePath, $coverImageName);

                    $profile->cover_image = '/uploads/profile-cover/' . $coverImageName;
                }

                if ($profile->save()) {
                    return redirect()->back()->with('success', "Successfully Updated");
                } else {
                    return "Unable to create Profile";
                }
            } else {
                $userProfile->about = $request->about;
                $userProfile->location = $request->location;

                if ($request->hasFile('profileImage')) {
                    $profileImage = $request->file('profileImage');
                    $profileImageName = time() . '_' . $profileImage->getClientOriginalName();
                    $profileImagePath = public_path() . '/uploads/profile-image/';
                    $profileImage->move($profileImagePath, $profileImageName);

                    $userProfile->profile_image = '/uploads/profile-image/' . $profileImageName;
                }

                if ($request->hasFile('cover')) {
                    $coverImage = $request->file('cover');
                    $coverImageName = time() . '_' . $coverImage->getClientOriginalName();
                    $coverImagePath = public_path() . '/uploads/profile-cover/';
                    $coverImage->move($coverImagePath, $coverImageName);

                    $userProfile->cover_image = '/uploads/profile-cover/' . $coverImageName;
                }

                if ($userProfile->save()) {
                    return redirect()->back()->with('success', "Successfully Updated");
                } else {
                    return "Something went wrong";
                }
            }

        }
        return "error";
        // return redirect()->back()->with('error', "Unable to Update");
    }

    public function studio()
    {

        $user = User::with(['videos'])->find(auth()->id());
        // return $user->videos;

        return view('front.panel.studio', compact(['user']));

    }

    public function upload()
    {
        $categories = Category::whereNull('parent_id')->get();
        $userID = auth()->user()->id;
        $user = User::find($userID);
        $playlists = $user->playlists;
        // return $playlist;
        return view('front.panel.upload', compact(['categories', 'playlists']));
    }

    public function storeVideo(Request $request)
    {
        $video = $request->file('video');
        $videoName = time() . '_' . $video->getClientOriginalName();
        $videoPath = public_path() . '/uploads/videos/';
        $video->move($videoPath, $videoName);

        $thumbnail = $request->file('thumbnail');
        $thumbnailName = time() . '_' . $thumbnail->getClientOriginalName();
        $thumbnailPath = public_path() . '/uploads/thumbnails/';
        $thumbnail->move($thumbnailPath, $thumbnailName);

        $video_title = $request->video_title;
        $video_description = $request->video_description;
        $video_category = $request->video_category;
        $playList = $request->playList;
        $video_playlist = $request->video_playlist;
        $video_tags = $request->video_tags;

        $videoModel = new VideoContent;
        $videoModel->u_id = auth()->id();
        $videoModel->title = $video_title;
        $videoModel->description = $video_description;
        $videoModel->category_id = $video_category;
        $videoModel->video_path = '/uploads/videos/' . $videoName;
        $videoModel->thumbnail = '/uploads/thumbnails/' . $thumbnailName;
        $videoModel->videoname = $videoName;
        $videoModel->tags = $video_tags;
        $videoModel->topic = $request->topic;

        $videoModel->save();

        if ($playList == 'yes') {
            $videoModel->playlists()->attach($video_playlist);
        }

        if ($request->topic) {
            Category::updateOrCreate([
                'parent_id' => $video_category,
                'name' => $request->topic,
                'slug' => strtolower($request->topic)
            ], [
                'parent_id' => $video_category,
                'name' => $request->topic,
                'slug' => strtolower($request->topic)
            ]);
        }

        //Save tags
        $tags = explode(",", $video_tags);
        foreach ($tags as $tag){
            $_t = Tags::firstOrNew(['tag_name'=>strtolower($tag)]);
            $_t->save();
            VideoTag::create([
               'video_id' => $videoModel->id,
                'tag_id' => $_t->id
            ]);
        }

        $user = User::with('subscribers')->find(auth()->id());

        foreach ($user->subscribers as $subscriber) {
            $notification = new Notifies();
            $notification->notification_by_id = $user->id;
            $notification->notification_to_id = $subscriber->id;
            $notification->message = $user->name . ' has posted a new video named ' . $video_title;
            $notification->save();
        }

        return redirect()->back()->with('success', "Video Uploaded Successful");

    }

    public function editVideo($id)
    {
        $video = VideoContent::with(['category', 'playlists'])->find($id);
        $categories = Category::get();
        $playlists = Playlist::get();
        return view('front.panel.edit-video', compact(['video', 'categories', 'playlists']));
    }

    public function updateVideo(Request $request, $id)
    {
        // return $request->all();
        $video = $request->file('video');

        $thumbnail = $request->file('thumbnail');

        $video_title = $request->video_title;
        $video_description = $request->description;
        $video_category = $request->video_category;
        $playList = $request->playList;
        $video_playlist = $request->video_playlist;
        $video_tags = $request->video_tags;

        $videoModel = VideoContent::find($id);
        $videoModel->u_id = auth()->id();
        $videoModel->title = $video_title;
        $videoModel->description = $video_description;
        $videoModel->category_id = $video_category;

        $videoModel->tags = $video_tags;
        if ($video != null) {
            $videoName = time() . '_' . $video->getClientOriginalName();
            $videoPath = public_path() . '/uploads/videos/';
            $video->move($videoPath, $videoName);
            $videoModel->video_path = '/uploads/videos/' . $videoName;
            $videoModel->videoname = $videoName;
        }

        if ($thumbnail != null) {

            $thumbnailName = time() . '_' . $thumbnail->getClientOriginalName();
            $thumbnailPath = public_path() . '/uploads/thumbnails/';
            $thumbnail->move($videoPath, $thumbnailName);
            $videoModel->thumbnail = $thumbnail;
        }
        $videoModel->save();
        return redirect()->back()->with('success', 'Updated Successfully');
        // dd($videoName = time() . '_' . $video->getClientOriginalName());

    }

    public function deleteVideo($id)
    {
        $video = VideoContent::find($id);
        $video->delete();
        return redirect()->back();
    }

}
