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

      $this->validate(request(),[
            'duration'=> 'integer|required',
         ]);

      Test::create([
         "name" => request('name'),
         'duration' => request('duration'),
         "user_id" => Auth::id(),
      ]);

      session()->flash('message','New test created!');

      return redirect('profile');
    }

   	
   public function edit(Test $test){

      return view('backend.test.edit',compact('test'));
   }

   public function update(Test $test){

      $this->validate(request(),[
         'duration' => 'integer|required',
      ]);

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

      public function grade(Test $test){

         $correctCount = 0;

         if($selectedAnswers = request('answers')){
            

            foreach($selectedAnswers as $questionId => $answers):
                  $question = $test->questions->find($questionId);
                  $correctAnswers = $question->answers->where('is_correct','1')->pluck('id')->toArray();
                  
                  if (count($answers) === count($correctAnswers)):
                     if (!array_diff($answers, $correctAnswers)) {
                        $correctCount++;
                     }
                  endif;
            endforeach;

            
         }
            
         return view('result',compact('correctCount','test'));
         
      }
}
