<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Place;
class PlacesController extends Controller
{
    public function getPlace($id)
    {
      $data['place'] = Place::find($id);
      return view('place.details',$data);
    }
}
