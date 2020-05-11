<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
   protected $fillable = [
      'nama', 'alamat', 'umur', 'no_handphone', 'ya','tidak','status',
    ];
}
