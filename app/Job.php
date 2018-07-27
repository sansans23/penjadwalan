<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = ['name'];


    public function Sdm()
    {
    	return $this->hasMany('App\Sdm');
    }
}
