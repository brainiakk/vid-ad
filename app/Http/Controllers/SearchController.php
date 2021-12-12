<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VideoContent;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\SearchKeywords;
use App\Models\Subscriber;
use App\Models\ContinueWatch;
use App\Models\Category;


class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = auth()->user();
        $user_id = $user->id;
        $category_id = $request->category_id;
        $topic_id = $request->topic_id;

        if ($request->q) {
            $v_ids = VideoContent::select("id")
                ->where("title", "LIKE", "%{$request->get('q')}%")
                ->pluck('id');
            $searchVideos = VideoContent::with(['views', 'user', 'continueWatches'])->whereIn('id', $v_ids)->inRandomOrder()->limit(8)->get();
            $data = SearchKeywords::where('u_id', $user_id)->first();
            // $keywordData = [];
            if ($data) {
                $keyword = SearchKeywords::find($data->id);
                $keywordData = json_decode($keyword->keywords);
                if(is_array($keywordData)){
                    if (!in_array($request->get('q'), $keywordData)) {
                        $keywordData[] = $request->get('q');
                    }
                }else{
                    if($keywordData != $request->get('q')){
                        $searchData[] = $keywordData;
                        $searchData[] = $request->get('q');
                        $keywordData = $searchData;
                    }
                }
                $keyword->keywords = json_encode($keywordData);
            } else {
                $keywordData = $request->get('q');
                $keyword = new SearchKeywords();
                $keyword->u_id = $user_id;
                $keyword->keywords = json_encode($keywordData);
            }
            $keyword->save();

        } elseif($category_id) {

            $q = VideoContent::with(['views', 'user', 'continueWatches'])->where('category_id', $category_id);

            if ($topic_id) {
                $topic = Category::find($topic_id);
                $q->where('topic', 'LIKE', '%' . $topic->name . '%');
            }

            $searchVideos = $q->inRandomOrder()->limit(8)->get();
        } else {
            $searchVideos = VideoContent::with(['views', 'user', 'continueWatches'])->inRandomOrder()->limit(8)->get();
        }

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

        $categories = Category::whereNull('parent_id')->get();
        $topics = $category_id ? Category::where('parent_id', $category_id)->get() : [];

        return view('search.index', compact(['user', 'searchVideos', 'watchlistVideos', 'contWatchesVideos', 'trendingVideos', 'categories', 'topics', 'category_id', 'topic_id']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function autocomplete(Request $request)
    {
        $videos = VideoContent::select("title")
                ->where("title","LIKE","%{$request->get('search')}%")
                ->get();

        $data = array();
        foreach ($videos as $video)
            {
                $data[] = $video->title;
            }

        echo json_encode($data);   
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

}