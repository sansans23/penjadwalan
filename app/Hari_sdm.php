<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hari_sdm extends Model
{
    //


    public function Sdm()
    {
    	return $this->belongsTo('App\Sdm','id_sdm','id');
    } 

    public function Hari_kerja()
    {
    	return $this->belongsTo('App\Hari_kerja','id_hari_kerja');
    }

    public function Kehadiran()
    {
    	return $this->belonsTo('App\Kehadiran');
    }

    public function User()
    {
    	return $this->belongsTo('App\User');
    }
}
