<?php

namespace App\Http\Controllers;

use App\Models\ContinueWatch;
use App\Models\VideoContent;
use Illuminate\Http\Request;


class ContinueWatchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function store(Request $request, $videoId)
    {
        // dd('OOK');
        $request->validate([
            'time' => 'required'
            ]);
        $user = auth()->user();
        if($user === null){
            return response()->json(['message' => 'User not authenticated'], 403);
        }
        $user_id = $user->id;
        $currentTime = $request->time;
        $video = VideoContent::where('id',$videoId)->first();
        if($video === null){
            return response()->json(['message' => 'Video not found'], 404);
        }

        //use this one if you update the time instead of inserting a new row each time a time is saved.
        $contWatchTime = ContinueWatch::where('v_id',$videoId)->where('u_id', $user_id)->latest()->first(); 

        if($contWatchTime === null){
            $contWatchModel = new ContinueWatch();
            $contWatchModel->u_id = auth()->id();
            $contWatchModel->v_id = $videoId;
            $contWatchModel->time = $currentTime;
            $contWatchModel->save();
        }
        else{
            $contWatchModel = ContinueWatch::find($contWatchTime->id);
            $contWatchModel->time = $currentTime;
            $contWatchModel->save();
        }

        return response()->json(['message' => 'Time saved'], 200);//send http response as json back to the ajax call

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContinueWatch  $continueWatch
     * @return \Illuminate\Http\Response
     */
    public function show(ContinueWatch $continueWatch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContinueWatch  $continueWatch
     * @return \Illuminate\Http\Response
     */
    public function edit(ContinueWatch $continueWatch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ContinueWatch  $continueWatch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContinueWatch $continueWatch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContinueWatch  $continueWatch
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContinueWatch $continueWatch)
    {
        //
    }

    public function getTime(Request $request, $video){
        $user = Auth::user();
        if($user === null){
            return response()->json(['message' => 'User not authenticated'], 403);
        }
        $video = Video::where('id',$video)->first();
        //get the time from saved time where you saved it with this data
        $playbackTime = Somemodel::where('video_id',$video->id)->where('user_id',$user->id)->get()->last();//use this one if you insert the time instead of updating an existing row each time a time is saved.
        $playbackTime = Somemodel::where('video_id',$video->id)->where('user_id',$user->id)->first();//use this one if you update the time instead of inserting a new row each time a time is saved.
    
        if($playbackTime === null){
            //there's no saved time
            $playbackTime = 0;
        }else{
            $playbackTime = $playbackTime->currentTime;//use what column you saved the time in.
        }
        return response()->json(['playbackTime' => $playbackTime], 200);
    }

}
