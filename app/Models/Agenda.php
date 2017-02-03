<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
  protected $table = 'agenda';
  protected $fillable = array('tanggal_acara','kode_ruang', 'nama_ruang', 'lantai', 'nama_acara', 'keterangan_acara','ditampilkan');
}
