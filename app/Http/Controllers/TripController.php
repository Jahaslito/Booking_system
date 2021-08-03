<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Trip;
use App\Models\Bus;
use App\Models\Driver;
use App\Models\Route;
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
        $route_list= Route::all();
        $driver_list= Driver::all();
        $bus_list= Bus::all();
        return view('adminviews/trips',
                    ['trip' => $trip,
                     'route_list'=>$route_list,
                    'driver_list'=>$driver_list,
                    'bus_list'=>$bus_list
                    ]);
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

        // dd("data: ".$request->departure." "."$request->arrival"." "."$request->seats_available"." "."$request->date"." "."$request->route_id"." "."$request->bus_id"." "."$request->driver_id");
        $request->validate([

            'departure'=>'required',
            'arrival'=> 'required',
            'seats_available'=> 'required',
            'date'=> 'required',
            'route_id'=> 'required',
            'bus_id'=> 'required',
            'driver_id'=> 'required',
        ]);
        // dd("called 2nd part");
        $trip=new Trip();
        $trip->departure= $request->departure;
        $trip->arrival = $request->arrival;
        $trip->seats_available = $request->seats_available;
        $trip->date = $request->date;
        $trip->route_id = $request->route_id;
        $trip->bus_id = $request->bus_id;
        $trip->driver_id = $request->driver_id;
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
    public function edit(Request $request)
    {

        $request->validate([

            'departure'=>'required',
            'arrival'=> 'required',
            'seats_available'=> 'required',
            'date'=> 'required',
            'route_id'=> 'required',
            'bus_id'=> 'required',
            'driver_id'=> 'required',
        ]);
        $trip_id = $request->edit_trip_id;
        $trip=trip::find($trip_id);
        $trip->departure= $request->departure;
        $trip->arrival = $request->arrival;
        $trip->seats_available = $request->seats_available;
        $trip->date = $request->date;
        $trip->route_id = $request->route_id;
        $trip->bus_id = $request->bus_id;
        $trip->driver_id = $request->driver_id;
        $trip->save();
        Session::put('Success','The trip has been edited successfully');
        return redirect('/adminviews/trips');
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
        $trip->seats_available = $request->available;
        $trip->date = $request->date;
        $trip->route_id = $request->route_id;
        $trip->bus_id = $request->bus_id;
        $trip->driver_id = $request->driver_id;
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
    public function destroy(Request $request)
    {
        $trip=Trip::findOrFail($request->trip_id);
        $trip->delete();
        return redirect('/adminviews/trips');
    }
}
