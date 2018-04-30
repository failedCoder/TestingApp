<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
	protected $fillable = ['body','test_id'];

    public function answers(){
    	return $this->hasMany('App\Answer');
    }

    public function test(){
    	return $this->belongsTo('App\Test');
    }
}
