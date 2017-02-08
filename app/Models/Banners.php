<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banners extends Model
{
  protected $table = 'banners';
  protected $primaryKey = 'id';
  protected $fillable = array('banner');
}
