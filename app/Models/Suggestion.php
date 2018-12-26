<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Suggestion extends Model
{
      use SoftDeletes;

      protected $table = 'suggestion';

      protected $fillable = ['email', 'detail'];
}
