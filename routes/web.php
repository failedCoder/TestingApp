<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','IndexController@index');

Route::get('/profile','BackendController@index')->middleware('auth');

Auth::routes();

Route::get('/test/{id}/{name}','TestController@show');

Route::post('/result/{test}','TestController@grade');


// BACKEND ROUTES FOR CREATING,EDITING AND DELETING TESTS GROUPED TOGETHER WITH AUTH MIDDLEWARE
Route::middleware(['auth'])->group(function() {

	#CREATING,EDITING AND DELETING TESTS
	Route::delete('profile/delete/{test}','TestController@destroy');

	Route::post('/profile/edit/{testId}','TestController@update');

	Route::get('/create/test','TestController@create');

	Route::post('/create/test','TestController@store');

	Route::get('/edit/test/{test}','TestController@edit');

	Route::patch('/edit/test/{test}','TestController@update');


	#CREATING,EDITING AND DELETING QUESTIONS
	Route::get('/questions/{testId}','QuestionController@index');

	Route::get('/edit/question/{question}','QuestionController@edit');

	Route::patch('/edit/question/{question}','QuestionController@update');

	Route::get('/create/question/{testId}','QuestionController@create');

	Route::post('/create/question/{test}','QuestionController@store');

	Route::delete('delete/question/{question}','QuestionController@destroy');


	#CREATING,EDITING AND DELETING ANSWERS
	Route::get('/answers/{questionId}','AnswerController@index');

	Route::get('/create/answer/{question}','AnswerController@create');

	Route::post('/create/answer/{question}','AnswerController@store');

	Route::get('/edit/answer/{answer}','AnswerController@edit');

	Route::patch('/edit/answer/{answer}','AnswerController@update');

	Route::delete('/delete/answer/{answerId}','AnswerController@destroy');

});

/**
TO DO:
-add timer
**/