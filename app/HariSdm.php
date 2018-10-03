<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HariSdm extends Model
{
    public function Sdm()
    {
    	return $this->belongsTo('App\Sdm','id_sdm');
    }

    public function HariKerja()
    {
    	return $this->belongsTo('App\Hari_kerja','id_hari_kerja');
    }
}
