<?php

namespace App\Http\Controllers\Admin\Places;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CRUD;
use App\Models\Place;
class PlacesController extends CRUD
{
  public function init(){
    $this->model = new Place();
    $this->data['page_title'] = "Places";
    $this->data['table_columns'] = ['Place Name' => 'name','Latitude' => "lat","Longitude"=>"long"];

    $this->form = [];
    $this->form[] = ["label" => "Place Name", "name" => "name", "type" => "text", "required" => true];
    $this->form[] = ["label" => "City", "name" => "city_id", "type" => "select", "required" => true];
    $this->form[] = ["label" => "Description", "name" => "desc", "type" => "textarea", "required" => true];
    $this->form[] = ["label" => "Latitude", "name" => "lat", "type" => "text", "required" => true];
    $this->form[] = ["label" => "Longitude", "name" => "long", "type" => "text", "required" => true];
    $this->form[] = ["label" => "Images", "name" => "image", "type" => "upload", "required" => true];
  }
}
