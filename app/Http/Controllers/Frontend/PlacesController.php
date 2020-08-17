<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Place;
use Illuminate\Support\Facades\Auth;
use App\Models\Review;
class PlacesController extends Controller
{
    public function getPlace($id)
    {
      $data['place'] = Place::find($id);
      return view('place.details',$data);
    }

    public function submitReview($place_id, Request $request)
    {
      Review::create([
        'place_id' => $place_id,
        'user_id' => Auth::Id(),
        'comment' => $request->comment,
        'rating_stars' => $request->rating,
      ]);
      return redirect()->back();
    }
}
