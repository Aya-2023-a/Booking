<?php

namespace App\Http\Controllers;

use App\Models\Airplane;
use App\Models\AirplaneSeat;
use Illuminate\Http\Request;

class AirplaneSeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $airplane = Airplane::find($id);
        $seats=AirplaneSeat::all();
        return view('airplane_seat.index',compact('seats','airplane'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $airplane = Airplane::find($id);
        $seats=AirplaneSeat::all();
        return view('airplane_seat.add',compact('seats','airplane'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $seats = new AirplaneSeat();
        $seats->travel_class_id = $request->travel_class_id;
        $seats->airplane_id = $request->airplane_id;
        $seats->save();
        return redirect()->back()->with('success','Airplane Seat added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AirplaneSeat  $airplaneSeat
     * @return \Illuminate\Http\Response
     */
    public function show(AirplaneSeat $airplaneSeat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AirplaneSeat  $airplaneSeat
     * @return \Illuminate\Http\Response
     */
    public function edit(AirplaneSeat $airplaneSeat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AirplaneSeat  $airplaneSeat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AirplaneSeat $airplaneSeat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AirplaneSeat  $airplaneSeat
     * @return \Illuminate\Http\Response
     */
    public function destroy(AirplaneSeat $airplaneSeat)
    {
        //
    }
}
