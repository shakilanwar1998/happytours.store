<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class place_guidelines extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'place_id','guidelines',
    ];

}
