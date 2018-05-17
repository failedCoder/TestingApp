<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Test;

use App\Question;

class QuestionController extends Controller
{
public function index($testId){

    	$test = Test::find($testId);

    	$testName = $test->name;

    	$questions = $test->questions;

    	return view('backend.question.index',compact('testName','questions','test'));
    }

    public function create($testId){

    	$test = Test::find($testId); 

    	return view('backend.question.create',compact('test'));
    }

    public function store(Test $test){

    	Question::create([
    		'body' => request('body'),
    		'test_id' => $test->id,
    	]);

        session()->flash('message','New question created!');

    	return redirect("/questions/$test->id");
    }

    public function edit(Question $question){

    	return view('backend.question.edit',compact('question'));
    }

    public function update(Question $question){

    	$question->body = request('body');

    	$question->save();

    	$testId = $question->test->id;

    	session()->flash('message','Question edited!');

      return redirect("/questions/$testId");
    }

    public function destroy($question){

    	Question::destroy($question);

      	session()->flash('message','Question deleted!');
      	


    	return redirect()->back();
    }




}
