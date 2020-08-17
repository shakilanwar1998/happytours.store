<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Place;
class MapsController extends Controller
{
    public function getIndex()
    {
      $data['places'] = Place::all();
      return view('place.google_map',$data);
    }
}
