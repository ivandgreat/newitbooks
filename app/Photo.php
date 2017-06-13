<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //
    protected $fillable = ['title','photo'];

    public function blog(){
      return $this->belongsTo('App\Blog');
    }

}
