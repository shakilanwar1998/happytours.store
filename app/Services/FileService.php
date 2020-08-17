<?php

namespace App\Services;
use Illuminate\Http\Request;

class FileService
{
  public $file;
  public function __construct($file){
    $this->file = $file;
  }

  public function upload(){
    $path = $this->file->store('public/files/uploads');
    return str_replace('public','storage',$path);
  }

  public function getExtention(){
    $extention = pathinfo($this->file->getClientOriginalName(), PATHINFO_EXTENSION);
    return $extention;
  }
}
