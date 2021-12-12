<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        if (\Auth::user()->user_type == 'moderator') {
            $impressions = Campaign::all()->sum('views');
            $campaigns = Campaign::all()->count();
            $pending_campaigns = Campaign::pending()->count();
            $budget = Campaign::all()->sum('budget');
            $remaining_budget = Campaign::all()->sum('remaining_budget');
            $spent = $budget - $remaining_budget;
            # code...
        }else{
            $impressions = Campaign::owner()->sum('views');
            $campaigns = Campaign::owner()->count();
            $pending_campaigns = Campaign::owner()->pending()->count();
            $budget = Campaign::owner()->sum('budget');
            $remaining_budget = Campaign::owner()->sum('remaining_budget');
            $spent = $budget - $remaining_budget;
        }
        return view('superadmin.dashboard.index', compact('impressions', 'campaigns', 'spent', 'pending_campaigns'));
    }

    public function home()
    {
        return redirect('/');
    }
}
