<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\County;
use App\City;


class AjaxController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
   
    }

    /**
     * Fetch counties.
     *
     * @return JSON array of counties
     */
    public function county(Request $request)
    {
        
        $data =  $request->input('id');
                
        $counties = County::where('country_id', $data)->get();
            
        return $counties;
    }
    
    /**
     * Fetch cities
     *
     * @return JSON array of cities
     */
    public function city(Request $request){
        $data =  $request->input('id');
                
        $cities = City::where('county_id', $data)->get();
            
        return $cities;
    }
}
