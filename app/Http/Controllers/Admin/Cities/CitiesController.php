<?php

namespace App\Http\Controllers\Admin\Cities;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CRUD;
use App\Models\City;
use App\Models\Country;
class CitiesController extends CRUD
{
  public function init(){
    $this->model = new City();
    $this->data['page_title'] = "Cities";
    $this->data['table_columns'] = ['City Name' => 'name','Latitude' => 'lat','Longitude' => 'long'];

    $this->form = [];
    $this->form[] = ["label" => "City Name", "name" => "name", "type" => "text", "required" => true];
    $this->form[] = ["label" => "Country", "name" => "country_id", "type" => "select", "required" => true,"model" =>new Country()];
    $this->form[] = ["label" => "Latitude", "name" => "lat", "type" => "text", "required" => true];
    $this->form[] = ["label" => "Longitude", "name" => "long", "type" => "text", "required" => true];
    $this->form[] = ["label" => "Images", "name" => "images", "type" => "upload", "required" => true];

    $this->sub_module = "places";
  }
}
