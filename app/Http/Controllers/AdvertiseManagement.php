<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertiseManagement extends Controller
{
    // Dashboard
    public function dashboard(Request $request)
    {
        return view('advertisement.index');
    }
    // Advt Mgmt.
    public function advertiseManagement(Request $request)
    {
        return view('advertisement.campaign.index');
    }
    // Create Campaign
    public function createCampaign(Request $request)
    {
        return view('advertisement.campaign.create');
    }
    // Account
    public function account(Request $request)
    {
        return view('advertisement.account');
    }
}