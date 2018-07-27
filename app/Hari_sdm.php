<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hari_sdm extends Model
{
    //


    public function Sdm()
    {
    	return $this->belongsTo('App\Sdm');
    } 

    public function Hari_kerja()
    {
    	return $this->belongsTo('App\Hari_kerja');
    }
}
