<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Trip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trip = Trip::all();
        
        return view('adminviews/trips',['trip' => $trip]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $trip = new Trip();
        return view('adminviews/trips',compact('trip'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'departure'=>'required',
            'arrival'=> 'required',
            'date'=> 'required',
        ]);
        $trip=new Trip();
        $trip->departure= $request->departure;
        $trip->arrival = $request->arrival;
        $trip->date = $request->date;
        $trip->save();
        Session::put('Success','The trip has been added successfully');
        return redirect('/adminviews/trips');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        $trip->departure= $request->departure;
        $trip->arrival = $request->arrival;
        $trip->date = $request->date;
        $trip->update();
        Session::put('Success', 'The trip has been edited successfully');
        return redirect('/adminviews/trips');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        $trip->delete();
        return redirect('/adminviews/trips');
    }
}
