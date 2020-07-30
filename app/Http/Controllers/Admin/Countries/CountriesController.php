<?php

namespace App\Http\Controllers\Admin\Countries;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountriesController extends Controller
{
    public function getIndex(){
      return view('admin.countries.index');
    }
}
