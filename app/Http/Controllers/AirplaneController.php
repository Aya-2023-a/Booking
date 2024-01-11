<?php

namespace App\Http\Controllers;

use App\Models\Airplane;
use Illuminate\Http\Request;
use App\Models\Airline;

class AirplaneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airplanes=Airplane::all();
        return view('airplane.index',compact('airplanes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $airlines=Airline::all();
        return view('airplane.create',compact('airlines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'model' => ['required','unique:airplane'],
            'airline_id' => ['required','exists:airline,id'],
            'number_of_seat' => ['required','numeric'],
        ],[
            'model.required'=> 'Please Enter model for Airplane',
            'model.unique'=>'This name is exist please enter new name',
            'airline_id.required' => 'Please chose Airline',
            'number_of_seat.required' => 'Please Enter number of seat for Airplane',
            'number_of_seat.numeric' => 'Please Enter number for number of seat for Airplane',
        ])->validate();
      
        $airplane = new Airplane();
        $airplane->model = $request->model;
        $airplane->airline_id = $request->airline_id;
        $airplane->number_of_seat = $request->number_of_seat;
        $airplane->save();
        return redirect()->back()->with('success','airplane added successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Airplane  $airplane
     * @return \Illuminate\Http\Response
     */
    public function show(Airplane $airplane)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Airplane  $airplane
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $airplane=Airplane::find($id);
        $airlines=Airline::all();
        return view('airplane.edit',compact('airplane', 'airlines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Airplane  $airplane
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(),[
            'model' => ['required','unique:airplane'],
            'airline_id' => ['required','exists:airline,id'],
            'number_of_seat' => ['required','numeric'],
        ],[
            'model.required'=> 'Please Enter model for Airplane',
            'model.unique'=>'This name is exist please enter new name',
            'airline_id.required' => 'Please chose Airline',
            'number_of_seat.required' => 'Please Enter number of seat for Airplane',
            'number_of_seat.numeric' => 'Please Enter number for number of seat for Airplane',
        ])->validate();
        $airplane=Airplane::find($id);
        $airplane->model = $request->model;
        $airplane->airline_id = $request->airline_id;
        $airplane->number_of_seat = $request->number_of_seat;
        $airplane->save();
        return redirect()->back()->with('success','Airplane Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Airplane  $airplane
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $airplane=Airplane::find($id);
        $airplane->delete();
        return redirect('airplane-index')->with('success','Airplane Deleted Successfully');
    }
}
