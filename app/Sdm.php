<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sdm extends Model
{
    protected $fillable =['name', 'pekerjaan_id'];

    // public function JobName()
    // {
    //     // return User::where('id',this->user_id)->first()->name;
    //     return $this->belongsTo('App\Job');
    // }


    public function job()
    {
    	return $this->belongsTo('App\Job','pekerjaan_id','id');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function Hari_sdm()
    {
    	return $this->hasMany('App\Hari_sdm','kehadiran');
    }

    public function HariKerja()
    {
        return $this->belongsToMany('App\Hari_kerja','hari_sdms','id_hari_kerja','id_sdm');
    }
}
