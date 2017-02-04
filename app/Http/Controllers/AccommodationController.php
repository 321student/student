<?php

namespace App\Http\Controllers;

use App\Country;
use App\County;
use App\City;
use App\Accommodation;
use Illuminate\Http\Request;



class AccommodationController extends Controller
{
            /**
     * Instantiate a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accommodations = Accommodation::all();
        //dd($accommodations);
        return view('accommodation.index', compact('accommodations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
     
        
        return view('accommodation.create', compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required|max:1000',
            'room_type' => 'required',
            'address_line_1' => 'required|max:255',
            'address_line_2' => 'max:255',
            'country' => 'required',
            'county' => 'required',
            'city' => 'required'
        ]);
        
        $accommodation = new Accommodation;
        
        $accommodation->title = $request->title;
        $accommodation->description = $request->description;
        $accommodation->price = $request->price;
        $accommodation->room_type = $request->room_type;
        $accommodation->wifi = $request->wifi;
        $accommodation->broadband = $request->broadband;
        $accommodation->aircon = $request->aircon;
        $accommodation->address_line_1 = $request->address_line_1;
        $accommodation->address_line_2 = $request->address_line_2;
        $accommodation->city = $request->city;
        $accommodation->county = $request->county;
        $accommodation->country = $request->country;
        
        
        $accommodation->save();
        $accommodations = Accommodation::all();
        return view('accommodation.index', compact('accommodations'));
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $accommodation = Accommodation::find($id);
        
        return view('accommodation.indyvidual', compact('accommodation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
