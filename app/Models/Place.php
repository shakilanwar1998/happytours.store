<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Place extends Model
{
    public $timestamps = false;
    protected $fillable = [
      'name',
      'city_id',
      'lat',
      'long',
      'images',
      'description'
    ];

    public function city()
    {
      return $this->belongsTo("App\Models\City");
    }
    public function reviews()
    {
      return $this->hasMany("App\Models\Review");
    }

    public function ratings()
    {
      return $this->hasMany("App\Models\Review")->avg('rating_stars');
    }
}
