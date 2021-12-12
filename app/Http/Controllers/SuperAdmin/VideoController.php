<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\AdStat;
use App\Models\Campaign;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VideoController extends Controller
{

    public function index()
    {
        return view('superadmin.dashboard.video.index');
    }

    public function playAd()
    {
        $user = \Auth::user();
        $ad_stats = AdStat::latest()->first();

        $q = Campaign::where('status', 'Active')->where(function($q) use($user) {

            return $q->where('age', $user->age_range())
                ->orWhere('age', 'All');
        })
            ->where(function($q) use($user) {

                return $q->where('gender', $user->gender)
                    ->orWhere('gender', 'All');
            })
            ->where(function($q) use($user) {

                return $q->where('location', $user->location)
                    ->orWhere('location', 'All');
            })
            ->where('schedule', '<=', Carbon::now()->toDateString())
            ->where('schedule_ends', '>=', Carbon::now()->toDateString())
            ->where('start', '<=', Carbon::now()->toTimeString())
            ->where('end', '>=', Carbon::now()->toTimeString());

      
        $campaign = $q->get()->shuffle()->first();
            if ($ad_stats) {
                        $q->where('bid_strategy', $ad_stats->bid_strategy);
                    }

        if ($campaign) {

            if (!$ad_stats) {

                AdStat::create([
                    'bid_strategy' => $campaign->bid_strategy,
                    'played' => 0
                ]);
            }

            if ($ad_stats->bid_strategy == 'Lowest Cost') {

                if ($ad_stats->played == 1) {
                    $ad_stats->update(['bid_strategy' => 'Bid Cap', 'played' => 0]);
                } else {
                    $ad_stats->update(['played' => 1]);
                }

            } elseif ($ad_stats->bid_strategy == 'Bid Cap') {

                if ($ad_stats->played == 2) {
                    $ad_stats->update(['bid_strategy' => 'Lowest Cost', 'played' => 0]);
                } else {
                    $ad_stats->update(['played' => $ad_stats->played + 1]);
                }
            }

            // $remaining_budget = $campaign->bid_strategy == 'Bid Cap'
            //     ? $campaign->budget - $campaign->bid
            //     : $campaign->budget - 0.7;

            $remaining_budget = $campaign->remaining_budget - 0.7;

            $data = [
                'views' => $campaign->views + 1,
                'remaining_budget' => $remaining_budget
            ];

            if ($remaining_budget < 0.7) {
                $data['status'] = 'Inactive';
            }

            $campaign->update($data);
            return response()->json($campaign->ad_media, 200);
        }

        if ($ad_stats) {
            $ad_stats->update([
                'bid_strategy' => $ad_stats->bid_strategy == 'Bid Cap'
                    ? 'Lowest Cost'
                    : 'Bid Cap', 'played' => 0
            ]);
        }

        return response(null, 422);
    }
}
