<?php

namespace App\Http\Controllers;

use App\Models\Direction;
use App\Models\Airport;
use Illuminate\Http\Request;

class DirectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $directions=Direction::all();
        return view('direction.index',compact('directions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $airports=Airport::all();
        return view('direction.create',compact('airports'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $direction = new Direction();
        $direction->origin_airport_code = $request->origin_airport_code;
        $direction->destination_airport_code = $request->destination_airport_code;
        $direction->save();
        return redirect()->back()->with('success','Direction added successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function show(Direction $direction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $direction=Direction::find($id);
        $airports=Airport::all();
        return view('direction.edit',compact('direction','airports'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function update($id, Direction $direction)
    {
        $direction=Direction::find($id);
        $direction->origin_airport_code = $request->origin_airport_code;
        $direction->destination_airport_code = $request->destination_airport_code;
        $direction->save();
        return redirect()->back()->with('success','Direction Edited successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $direction=Direction::find($id);
        $direction->delete();
        return redirect('direction-index')->with('success','Direction Deleted Successfully');
    }
}
