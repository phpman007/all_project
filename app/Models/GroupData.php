<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupData extends Model
{
    use SoftDeletes;

    protected $fillable = [
      'title',
      'publish'
    ];

    public function scopePublish() {

      return $this->where('publish', 1);

    }
}
