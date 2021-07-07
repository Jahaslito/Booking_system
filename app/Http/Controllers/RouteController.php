<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
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
        $route =Route::all();

        return view('adminviews/routes', ['route' => $route]);
    }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $route= new Route();
        return view('adminviews/routes',compact('route'));
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
            'source'=>'required',
            'destination'=>'required',
            'price'=> 'required',
        ]
        );
        $route = new Route();
        $route->source=$request->source;
        $route->destination=$request-> destination;
        $route->price=$request->price;
        $route->save();
        Session::put('Success','The route has been added successfully');
        return redirect('/adminviews/routes');
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
    public function edit(Request $request)
    {        
        $request->validate([
            'source'=>'required',
            'destination'=>'required',
            'price'=> 'required',
        ]
        );

        $route_id= $request->route_id;
        $route = Route::find($route_id);
        $route->source=$request->source;
        $route->destination=$request-> destination;
        $route->price=$request->price;
        $route->save();
        Session::put('Success','The route has been edited successfully');
        return redirect('/adminviews/routes');
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
        $route->source = $request->source;
        $route->destination = $request->destination;
        $route->price = $request->price;
        $route->update();
        Session::put('Success', 'The route has been edited successfully');
        return redirect('/adminviews/routes');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(route $route)
    {
       
        $route->delete();
        return redirect('/adminviews/routes');
    }

    public function search(){
        $fromData = DB::select('select distinct * from routes');
        $toData = DB::select('select distinct * from routes');
        $triproutes = DB::select('select trips.departure, trips.arrival, trips.date, routes.source, routes.destination, routes.boarding_place, routes.price,routes.price from routes inner join trips on routes.id = trips.route_id');;
        return view('customerViews.booking',compact('fromData','toData','triproutes'));
    }
}
