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
}
