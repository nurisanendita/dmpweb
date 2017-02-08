<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekorTercapai extends Model
{
  protected $table = 'rekorcapaian';
  protected $primaryKey = 'id';
  protected $fillable = array('hari','jam');
}
