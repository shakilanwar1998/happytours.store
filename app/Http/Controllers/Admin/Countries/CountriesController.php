<?php

namespace App\Http\Controllers\Admin\Countries;
use App\Services\CRUD;
use App\Models\Admin\Country;
class CountriesController extends CRUD
{
    public function init(){
      $this->model = new Country();
      $this->data['page_title'] = "Countries";
      $this->data['table_columns'] = ['Country Name' => 'name'];

      $this->form = [];
      $this->form[] = ["label" => "Country Name", "name" => "name", "type" => "text", "required" => true];
      // $this->form[] = ["label" => "Description", "name" => "desc", "type" => "textarea", "required" => true];
      // $this->form[] = ["label" => "Image", "name" => "image", "type" => "upload", "required" => true];
      // $this->form[] = ["label" => "Image", "name" => "image", "type" => "select", "required" => true];
    }
}
