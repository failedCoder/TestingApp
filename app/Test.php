<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	protected $fillable = ['name','duration','user_id'];
	

    public function questions(){
    	return $this->hasMany('App\Question');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
