<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Test;

use App\Question;

class IndexController extends Controller
{
    public function index(){

    	$tests = Test::latest()->paginate(20);

    	return view('index',compact('tests'));
    	
    }
}
 