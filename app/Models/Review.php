<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\User;
class Review extends Model
{
    protected $table = "ratings";
    protected $fillable =[
      'place_id',
      'user_id',
      'comment',
      'rating_stars',
    ];
    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
