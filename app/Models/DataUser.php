<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataUser extends Model
{

  protected $fillable = [
    'field1',
    'field2',
    'field3',
    'field4',
    'date1',
    'field5',
    'field6',
    'field7',
    'field8',
    'field9',
    'text1',
    'text2',
    'date2',
    'remark',
    'attachment',
    'user_id',
  ];

    public function userCreate () {
      return $this->belongsTo(App\User::class);
    }
}
