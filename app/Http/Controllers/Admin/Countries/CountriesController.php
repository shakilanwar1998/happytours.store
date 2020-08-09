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

      $this->form_data = [];
      $this->form_data[] = ["label" => "Country Name", "name" => "name", "type" => "text", "required" => true];
    }
}
