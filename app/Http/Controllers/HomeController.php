<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\driver;
use App\Models\trip;
use App\Models\bus;
use App\Models\route;

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
        return view('home');
    }

    public function login_register()
    {
        return view('auth.login');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function landing()
    {
        return view('adminviews.landing');
    }

    public function buses()
    {
        return view('adminviews.buses');
    }

    public function drivers()
    {
        $driver= Driver::all();
        return view('adminviews.drivers',['driver'=>$driver]);
    }

    public function routes()
    {
        return view('adminviews.routes');
    }

    public function trips()
    {
        $trip= Trip::all();
        return view('adminviews.trips',['trip'=>$trip]);
    }
    public function booking()
    {
        return view('customerViews.booking');
    }

    public function payment()
    {
        return view('customerViews.payment');
    }

    public function profile()
    {
        return view('customerViews.profile');
    }

    public function aboutUs()
    {
        return view('aboutUs');
    }
}