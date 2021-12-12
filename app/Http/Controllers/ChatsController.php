<?php

namespace App\Http\Controllers;

use App\Events\LiveChatEvent;
use App\Models\Chats;
use App\Models\User;
use App\Models\VideoContent;
use Illuminate\Http\Request;

class ChatsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allMessages(VideoContent $videoContent)
    {
        return response()->json($videoContent->messages()->with('user')->get(), 200);
    }
    public function send(Request $request)
    {
        $user = User::find($request->user_id);
        $video = VideoContent::find($request->video_id);
        event(new LiveChatEvent($user, $request->message, $video));
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chats  $chats
     * @return \Illuminate\Http\Response
     */
    public function show(Chats $chats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chats  $chats
     * @return \Illuminate\Http\Response
     */
    public function edit(Chats $chats)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chats  $chats
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chats $chats)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chats  $chats
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chats $chats)
    {
        //
    }
}
