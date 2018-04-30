<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class BackendController extends Controller
{
    public function index(){

    	$tests = Auth::user()->tests;

    	

    	return view('backend.index',compact('tests'));
    }

    
}
