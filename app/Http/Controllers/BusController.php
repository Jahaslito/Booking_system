<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use App\Models\bus;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bus =Bus::all();

        return view('adminviews/buses', ['bus' => $bus]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bus= new Bus();
        return view('adminviews/buses',compact('bus'));
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
            'plate'=>'required',
            'capacity'=>'required',
            'model'=> 'required',
            'route_id'=> 'required',
        ]
        );
        $bus = new Bus();
        $bus->number_plate=$request->plate;        
        $bus->capacity=$request->capacity;
        $bus->model=$request->model;
        $bus->route_id= $request->route_id;
        $bus->save();
        Session::put('Success','The bus has been added successfully');
        return redirect('/adminviews/buses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(bus $bus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $request->validate([
            'plate'=>'required',
            'capacity'=>'required',
            'model'=> 'required',
            'route_id'=> 'required',
        ]
        );

        $bus_id= $request->bus_id;
        $bus = Bus::find($bus_id);
        $bus->number_plate=$request->plate;        
        $bus->capacity=$request->capacity;
        $bus->model=$request->model;
        $bus->route_id= $request->route_id;
        $bus->save();
        Session::put('Success','The bus has been edited successfully');
        return redirect('/adminviews/buses');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bus $bus)
    {
        $bus->number_plate = $request->number_plate;        
        $bus->capacity = $request->capacity;
        $bus->model = $request->model;
        $bus->route_id = $request->route_id;
        $bus->update();
        Session::put('Success', 'The bus has been edited successfully');
        return redirect('/adminviews/buses');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $bus=Bus::findOrFail($request->bus_id);
        $bus ->delete();
        return redirect('/adminviews/buses');
    }

   
}
