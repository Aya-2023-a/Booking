<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries=Country::all();
        return view('country.index',compact('countries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('country.create');
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
            'name' => ['required'],
            'country_code' => ['required','unique:country'],
        ],[
            'name.required' => 'Please enter name of country',
            'country_code.required' => 'Please enter code for country',
            'country_code.unique' => 'This code is exist please enter new code',
        ])->validate();

        $country = new Country();
        $country->name = $request->name;
        $country->country_code = $request->country_code;
        $country->save();
        return redirect()->back()->with('success','Country Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $country=Country::find($id);
        return view('country.edit',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => ['required'],
            'country_code' => ['required','unique:country'],
        ],[
            'name.required' => 'Please enter name of country',
            'country_code.required' => 'Please enter code for country',
            'country_code.unique' => 'This code is exist please enter new code',
        ])->validate();
        
        $country=Country::find($id);
        $country->name = $request->name;
        $country->country_code = $request->country_code; 
        $country->save();
        return redirect()->back()->with('success','Country Edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country=Country::find($id);
        $country->delete();
        return redirect('country-index')->with('success','Country Deleted Successfully');
    }
}
