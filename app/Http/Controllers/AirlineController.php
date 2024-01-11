<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AirlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $airlines=Airline::all();
        return view('airline.index',compact('airlines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('airline.create');
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
            'name' => ['required','unique:airline'],
            'address' => ['required'],
            'website' => ['required'],
            'phone' => ['required'],
        ],[
            'name.required'=> 'Please Enter name for Airline',
            'name.unique'=>'This name is exist please enter new name',
            'address.required' => 'Please Enter address for Airline',
            'website.required' => 'Please Enter website for Airline',
            'phone.required' => 'Please Enter phone for Airline',
        ])->validate();
      
        $airline = new Airline();
        $airline->name = $request->name;
        $airline->address = $request->address;
        $airline->website = $request->website;
        $airline->phone = $request->phone;
        $airline->save();
        return redirect()->back()->with('success','airline added successfully');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function show(airline $airline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $airline=Airline::find($id);
        return view('airline.edit',compact('airline'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => ['required','unique:airline'],
            'address' => ['required'],
            'website' => ['required'],
            'phone' => ['required'],
        ],[
            'name.required'=> 'Please Enter name for Airline',
            'name.unique'=>'This name is exist please enter new name',
            'address.required' => 'Please Enter address for Airline',
            'website.required' => 'Please Enter website for Airline',
            'phone.required' => 'Please Enter phone for Airline',
        ])->validate();
      
        $airline=Airline::find($id);
        $airline->name = $request->name;
        $airline->address = $request->address;
        $airline->website = $request->website;
        $airline->phone = $request->phone;
        $airline->save();
        return redirect()->back()->with('success','Airline Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\airline  $airline
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $airline=Airline::find($id);
        $airline->delete();
        return redirect('airline-index')->with('success','Airline Deleted Successfully');
    }
}
