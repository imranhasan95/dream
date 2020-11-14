<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blogsubcategory extends Model
{
  use SoftDeletes;

  protected $guarded = [];

  function relationtocategorytable(){
      return $this->hasOne('App\Blogcategory','id','blogcategorie_id');
    }
}
