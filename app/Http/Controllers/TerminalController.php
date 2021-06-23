<?php

namespace App\Http\Controllers;

use App\Models\terminal;
use Illuminate\Http\Request;

class TerminalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $terminal =Terminals::all();

        return view('adminviews.terminals', ['terminals' => $terminals]);
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
     * @param  \App\Models\terminal  $terminal
     * @return \Illuminate\Http\Response
     */
    public function show(terminal $terminal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\terminal  $terminal
     * @return \Illuminate\Http\Response
     */
    public function edit(terminal $terminal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\terminal  $terminal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, terminal $terminal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\terminal  $terminal
     * @return \Illuminate\Http\Response
     */
    public function destroy(terminal $terminal)
    {
        //
    }
}
