<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Place;
use App\Models\City;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function index()
    {
        $data['cities'] = City::all();
        $data['popular_places'] = Place::get()->sortBy(function($places){
          return $places->ratings();
        })->take(5);

        foreach($data['popular_places'] as $key => $value)
        {
          $data['popular_places'][$key] = Place::find($value->id);
        }
        return view('home',$data);
    }
}
