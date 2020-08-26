<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\City;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
class CityController extends Controller
{
    public function getPlaces($id)
    {
      $data['places'] = City::find($id)->places;
      return view('place.all_places',$data);
    }

}
