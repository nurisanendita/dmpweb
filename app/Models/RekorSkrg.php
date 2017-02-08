<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekorSkrg extends Model
{
  protected $table = 'rekorskrg';
  protected $primaryKey = 'id';
  protected $fillable = array('hari','jam');
}
