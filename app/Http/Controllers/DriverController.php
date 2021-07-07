<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;
use App\Models\driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facedes\input;
use App\Http\Requests;



class DriverController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $driver =Driver::all();

        return view('adminviews/drivers', ['driver' => $driver]);
    }


    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $driver= new Driver();
        return view('adminviews/drivers',compact('driver'));
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
            'name'=>'required',
            'phone_number'=>'required',
            'driver_licence'=> 'required',
        ]
        );
        $driver = new Driver();
        $driver->name=$request->name;
        $driver->phone_number=$request-> phone_number;
        $driver->driver_licence=$request->driver_licence;
        $driver->save();
        Session::put('Success','The driver has been added successfully');
        return redirect('/adminviews/drivers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'phone_number'=>'required',
            'driver_licence'=> 'required',
        ]
        );

        $user_id=$request->user_id;
        $driver= Driver::find($user_id);
        $driver->name=$request->name;
        $driver->phone_number=$request->phone_number;
        $driver->driver_licence=$request->driver_licence;
        $driver->save();
        Session::put('Success','The driver has been edited successfully');
        return redirect('/adminviews/drivers');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, driver $driver)
    {
        $driver->name = $request->name;
        $driver->phone_number = $request->phone_number;
        $driver->driver_licence = $request->driver_licence;
        $driver->update();
        Session::put('Success', 'The driver has been edited successfully');
        return redirect('/adminviews/drivers');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\driver  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(driver $driver)
    {
        $driver ->delete();
        return redirect('/adminviews/drivers');
    }

 
}

