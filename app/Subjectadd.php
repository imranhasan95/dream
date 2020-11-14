<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subjectadd extends Model
{
  use SoftDeletes;

  protected $guarded = [];
}
