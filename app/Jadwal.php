<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    public $timestamps = false;
    protected $table = 'jadwals';
    protected $primaryKey = 'id_jadwal';
    protected $fillable = ['nama_mapel','hari','jam'];

    public function user(){
        return $this->belongsToMany('App\User','jadwal_users','jadwal_id' ,'user_id');
    }

}
