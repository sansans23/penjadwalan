<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    public function sdm()
    {
    	return $this->belongsTo('App\Sdm','id_sdm','id','name');
    }

    public function hari_sdm()
    {
    	return $this->belongsTo('App\Hari_sdm','kehadiran');
    }

    // public function datahadir()
    // {
    // 	$tocount = $this->belongsTo('App\Hari_sdm','kehadiran');
    // 	// $count = 0 + $tocount;
    // 	return $tocount; 
    // }
    public function kehadiran()
    {
      return DB::table('hari_sdm')->where('id_sdm','=',$this->id)->sum('kehadiran');
    }
}
