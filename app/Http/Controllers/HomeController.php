<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Place;
use App\Models\City;
use Illuminate\Support\Facades\Auth;
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
    public function search(Request $request){
      $search= $request->get('search');
      $data['places'] = Place::where('name','like','%'.$search.'%')->get();
      return view('place.searched_places',$data);
    }

    public function place($id)
    {
      $data['place'] = Place::get()->sortBy(function($places){
        return $places->ratings();
      })->take(5);

      foreach($data['place'] as $key => $value)
      {
        $data['place'][$key] = Place::find($id);
      }
      return view('place.all_places',$data);
    }

}
