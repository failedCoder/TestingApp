<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
	protected $fillable = ['body','is_correct','question_id'];

    public function question(){
    	return $this->belongsTo('App\Question');
    }
}
