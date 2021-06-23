<?php

namespace App\Http\Controllers;

use App\Models\route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RouteController extends Controller
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(route $route)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(route $route)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, route $route)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(route $route)
    {
        //
    }

    public function search(){
        $fromData = DB::select('select distinct * from routes');
        $toData = DB::select('select distinct * from routes');
        $triproutes = DB::select('select trips.departure, trips.arrival, trips.date, routes.source, routes.destination, routes.boarding_place, routes.price,routes.price from routes inner join trips on routes.id = trips.route_id');;
        return view('customerViews.booking',compact('fromData','toData','triproutes'));
    }
}
