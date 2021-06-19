<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function login_register(){
        return view('auth.login');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function landing(){
        return view('adminviews.landing');
    }

    public function buses(){
        return view('adminviews.buses');
    }

    public function drivers(){
        return view('adminviews.drivers');
    }

    public function routes(){
        return view('adminviews.routes');
    }

    public function trips(){
        return view('adminviews.trips');
    }
    public function booking(){
        return view('customerViews.booking');
    }
}
