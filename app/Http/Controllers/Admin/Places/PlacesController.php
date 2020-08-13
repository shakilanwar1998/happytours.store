<?php

namespace App\Http\Controllers\Admin\Places;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CRUD;
use App\Models\Admin\Place;
class PlacesController extends CRUD
{
  public function init(){
    $this->model = new Place();
    $this->data['page_title'] = "Places";
    $this->data['table_columns'] = ['Place Name' => 'name'];

    $this->form = [];
    $this->form[] = ["label" => "Place Name", "name" => "name", "type" => "text", "required" => true];
    // $this->form[] = ["label" => "Description", "name" => "desc", "type" => "textarea", "required" => true];
    // $this->form[] = ["label" => "Image", "name" => "image", "type" => "upload", "required" => true];
    // $this->form[] = ["label" => "Image", "name" => "image", "type" => "select", "required" => true];
  }
}
