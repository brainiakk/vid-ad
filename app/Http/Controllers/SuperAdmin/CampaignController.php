<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function modIndex()
    {
        $campaigns = Campaign::all();
        return view('superadmin.dashboard.campaigns.index', compact('campaigns'));
    }

    public function modPending()
    {
        $campaigns = Campaign::pending()->get();
        return view('superadmin.dashboard.campaigns.pending', compact('campaigns'));
    }

    public function index()
    {
        $campaigns = Campaign::owner()->get();
        return view('superadmin.dashboard.campaigns.index', compact('campaigns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('superadmin.dashboard.campaigns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [

            'name' => 'required|string|max:255',
            'objective' => 'required|string|max:255',
            'budget_type' => 'required|string|max:255',
            'budget' => 'required|numeric|min:10',
            'placement' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'schedule' => 'required|date',
            'schedule_ends' => 'required|date',
            'start' => 'required',
            'end' => 'required',
            'bid_strategy' => 'required|string|max:255',
            'ad_name' => 'required|string|max:255',
            'ad_format' => 'required|string|max:255',
            'ad_media' => 'required|mimes:mp4,mov,ogg',
        ]);
        $input = $request->all();
        if ($request->hasFile('ad_media')) {
            $video = $request->file('ad_media');
            $videoName = time() . '_' . $video->getClientOriginalName();
            $videoPath = public_path() . '/uploads/ads/';
            $video->move($videoPath, $videoName);
            // $videoModel->video_path = '/uploads/ads/' . $videoName;

            $input['ad_media'] = '/uploads/ads/' . $videoName;
        }
        $input['status'] = 'Pending';
        Campaign::create($input + ['remaining_budget' => $request->budget]);
        if (\Auth::user()->user_type == 'moderator') {
            return redirect('moderator/campaigns');
            # code...
        }else{
            return redirect('super-admin/campaigns');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $campaign = Campaign::find($id);
        return view('superadmin.dashboard.campaigns.show', compact('campaign'));
    }

    public function reject(Request $request, Campaign $campaign)
    {
        $campaign->update(['status' => 'Rejected', 'reject_reason' => $request->reason]);
        if (\Auth::user()->user_type == 'moderator') {
            return redirect('moderator/campaigns');
            # code...
        }else{
            return redirect('super-admin/campaigns');
        }
    }
    public function activate(Campaign $campaign)
    {
        $campaign->update(['status' => 'Active']);
        if (\Auth::user()->user_type == 'moderator') {
            return redirect('moderator/campaigns');
            # code...
        }else{
            return redirect('super-admin/campaigns');
        }
    }
    
    public function deactivate(Campaign $campaign)
    {
        $campaign->update(['status' => 'Pending']);
        if (\Auth::user()->user_type == 'moderator') {
            return redirect('moderator/campaigns');
            # code...
        }else{
            return redirect('super-admin/campaigns');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campaign = Campaign::find($id);
        return view('superadmin.dashboard.campaigns.edit', compact('campaign'));
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
        $this->validate($request, [

            'name' => 'required|string|max:255',
            'objective' => 'required|string|max:255',
            'budget_type' => 'required|string|max:255',
            'budget' => 'required|numeric|min:10',
            'placement' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'gender' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'schedule' => 'required|date',
            'schedule_ends' => 'required|date',
            'start' => 'required',
            'end' => 'required',
            'bid_strategy' => 'required|string|max:255',
            'ad_name' => 'required|string|max:255',
            'ad_format' => 'required|string|max:255',
        ]);

        $campaign = Campaign::find($id);
        $input = $request->all();
        if ($request->hasFile('ad_media')) {
            if ($campaign->ad_media != null) {
                unlink(public_path().$campaign->ad_media);
            }
            $video = $request->file('ad_media');
            $videoName = time() . '_' . $video->getClientOriginalName();
            $videoPath = public_path() . '/uploads/ads/';
            $video->move($videoPath, $videoName);
            // $videoModel->video_path = '/uploads/ads/' . $videoName;

            $input['ad_media'] = '/uploads/ads/' . $videoName;
        }
        $campaign->update($input);
        if (\Auth::user()->user_type == 'moderator') {
            return redirect('moderator/campaigns');
            # code...
        }else{
            return redirect('super-admin/campaigns');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $campaign = Campaign::find($id);
        unlink(public_path().$campaign->ad_media);
        $campaign->delete();
        if (\Auth::user()->user_type == 'moderator') {
            return redirect('moderator/campaigns');
            # code...
        }else{
            return redirect('super-admin/campaigns');
        }
    }
}
