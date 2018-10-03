<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hari_kerja extends Model
{
    //
    protected $table = 'harikerjas';

    public function Hari_sdm()
    {
    	return $this->hasMany('App\Hari_sdm');
    }

    public function Sdm()
    {
    	return $this->belongsToMany('App\Sdm','hari_sdms','id_sdm','id_hari_kerja');
    }

    public function HariSdm()
    {
        return $this->hasMany('App\HariSdm','id_hari_kerja');
    }
}
