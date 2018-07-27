<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm extends Model
{
    protected $fillable =['name', 'pekerjaan_id'];


    public function Job()
    {
    	return $this->belongsTo('App\Job');
    }

    public function user()
    {
    	return $this->hasOne('App\User');
    }

    public function Hari_sdm()
    {
    	return $this->hasMany('App\Hari_sdm');
    }
}
