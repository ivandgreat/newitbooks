<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['title','body','photo_id'];

    // build a relationship with category
    public function category(){
      // return $this->belongsToMany(Category::class);
      return $this->belongsToMany('App\Category');
    }

    public function photo(){
      return $this->belongsTo('App\Photo');
    }
}
