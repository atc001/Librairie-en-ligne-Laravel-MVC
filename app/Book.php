<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;

    public function authors()
    {
        return $this->belongsToMany('App\Author');
    }
}