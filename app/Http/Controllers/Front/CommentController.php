<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\CommentLike;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'body' => 'required',
        ]);

        $input = $request->all();
        $input['user_id'] = auth()->user()->id;

        Comment::create($input);

        ///return response()->redirectToRoute('video.play', $request->video_id);
        //return route('video.play', $request->video_id);
        return back();
    }

    public function like(Request $request)
    {
        $data = [
            'user_id' => auth()->user()->id,
            'comment_id' => $request->comment_id
        ];

        CommentLike::updateOrCreate($data, $data);
        return back();
    }

    public function dislike(Request $request)
    {
        CommentLike::where('user_id', auth()->user()->id)
            ->where('comment_id', $request->comment_id)
            ->delete();

        return back();
    }
}
