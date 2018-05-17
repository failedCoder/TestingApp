<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

use App\Answer;

class AnswerController extends Controller
{
    public function index($questionId){

    	$question = Question::find($questionId);

    	$questionText = $question->body;

    	$answers = $question->answers;

    	return view('backend.answer.index',compact('questionText','answers','question'));
    }

    public function create(Question $question){

    	return view('backend.answer.create',compact('question'));
    }

    public function store($question){

        $this->validate(request(),[
            'correct' => 'required',
        ]);

    	Answer::create([
    		'body' => request('body'),
    		'is_correct' => request('correct'),
    		'question_id' => $question,
    	]);

        session()->flash('message','New answer created!');

    	return redirect("/answers/$question");
    }

    public function edit(Answer $answer){

    	return view('backend.answer.edit',compact('answer'));
    }

    public function update(Answer $answer){

    	$answer->body = request('body');


    	if(request('correct') !== NULL){
			$answer->is_correct = request('correct');
    	}

    	$answer->save();

    	$id = $answer->question->id;

        session()->flash('message','Answer edited!');

    	return redirect("answers/$id");
    }

    public function destroy($answerId){

    	Answer::destroy($answerId);

      	session()->flash('message','Answer deleted!');
      	
    	return redirect()->back();
    }
}
