<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Add Comment for Testing
        // dd(auth()->user()->roles()->get()[0]->name);

        # code...
        return view('dashboard');

    }


    // public function fow(Type $var = null)
    // {
    //     # code...
    // }
}
