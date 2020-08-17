<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;
    protected $fillable = [
      'name',
      'country_id',
      'lat',
      'long',
      'images'
    ];

    public function places(){
      return $this->hasMany('App\Models\Place');
    }

}
