<?php

namespace App\Http\Controllers\Admin\Countries;
use App\Services\CRUD;
use App\Models\Country;
class CountriesController extends CRUD
{
    public function init(){
      $this->model = new Country();
      $this->data['page_title'] = "Countries";
      $this->data['table_columns'] = ['Country Name' => 'name'];

      $this->form = [];
      $this->form[] = ["label" => "Country Name", "name" => "name", "type" => "text", "required" => true];
      $this->form[] = ["label" => "Latitude", "name" => "lat", "type" => "text", "required" => true];
      $this->form[] = ["label" => "Longitude", "name" => "long", "type" => "text", "required" => true];
      $this->form[] = ["label" => "Images", "name" => "image", "type" => "upload", "required" => true];

      $this->sub_module = "cities";
    }
}
