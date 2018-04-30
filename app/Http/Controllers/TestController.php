<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Test;

class TestController extends Controller
{
	public function create(){

      return view('backend.test.create');
  }

    public function store(){

      Test::create([
         "name" => request('name'),
         'duration' => request('duration'),
         "user_id" => Auth::id(),
      ]);

      return redirect('profile');
    }

   	
   public function edit(Test $test){

      return view('backend.test.edit',compact('test'));
   }

   public function update(Test $test){

      $test->name = request('name');
      $test->duration = request('duration');

      $test->save();

      session()->flash('message','Test edited!');

      return redirect('/profile');

   }


   public function destroy($test){

      Test::destroy($test);

      session()->flash('message','Test deleted!');

      return redirect()->back();
   }

   	public function show($id){

      $test = Test::find($id);
   		
      return view('show',compact('test'));
   	}
}
