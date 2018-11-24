<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    public $timestamps = false;
    protected $table = 'jadwals';
    protected $primaryKey = 'id_jadwal';
    protected $fillable = ['nama_mapel','hari','jam'];
}
