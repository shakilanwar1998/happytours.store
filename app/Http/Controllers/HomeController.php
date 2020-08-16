<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  /*  public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $data = DB::table('cities')
                      ->join('places','city_id','=','cities.id')
                      ->select('cities.name as city_name', 'places.name as place_name')
                      ->get();
        return view('home',compact('data'));


    }
}
