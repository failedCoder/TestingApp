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




Route::get('/test/{id}/{name}','TestController@show');


Route::get('/profile','BackendController@index');

Route::delete('profile/delete/{test}','TestController@destroy');



Route::post('/profile/edit/{testId}','TestController@update');//put/patch

Route::get('/create/test','TestController@create');

Route::post('/create/test','TestController@store');

Route::get('/edit/test/{test}','TestController@edit');

Route::patch('/edit/test/{test}','TestController@update');


Route::get('/questions/{testId}','QuestionController@index');

Route::get('/edit/question/{question}','QuestionController@edit');

Route::patch('/edit/question/{question}','QuestionController@update');

Route::get('/create/question/{testId}','QuestionController@create');

Route::post('/create/question/{test}','QuestionController@store');

Route::delete('delete/question/{question}','QuestionController@destroy');



Route::get('/answers/{questionId}','AnswerController@index');

Route::get('/create/answer/{question}','AnswerController@create');

Route::post('/create/answer/{question}','AnswerController@store');

Route::get('/edit/answer/{answer}','AnswerController@edit');

Route::patch('/edit/answer/{answer}','AnswerController@update');

Route::delete('/delete/answer/{answerId}','AnswerController@destroy');



Auth::routes();



/**
TO DO:
-grupiraj rute,stavi middleware na njih
-sredi navbar sa uvjetima
-pogledaj u masteru ono dvoje
-napravi validacije i errore za input u create
-dodaj flasheve
-linkovi za vracanje u formama
-dinamicki dodjelit namove i value u showu i stavit u form element
-timer dodaj
**/