@extends('layouts.master')

@section('content')
<br>

@if ($flash=session('message'))
<div class="container">
	<div class="alert alert-success" role="alert" id = "Delete">
	    {{ $flash }}
	</div>
</div>

<script src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js'></script>
<script type="text/javascript">
$("#Delete").fadeOut(4000)
</script>    
@endif

<div class="container">
	<div class="row">
		<div class="my-auto ml-auto">
			<a href="/profile">
				<i class="fas fa-arrow-circle-left fa-2x"></i>
			</a>
		</div>
	</div>
	<div class="row">
		
		<div class="col-md-8 offset-md-2 d-flex justify-content-center">
			<h1>Questions for {{ $testName }}</h1>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 mx-auto">
				<a href="/create/question/{{$test->id}}" class="btn btn-primary btn-lg  btn-block" role="button" aria-pressed="true">Add new question</a>

			</div>
		</div>
	</div>
	<br>

	<div class="container">
		<div class="row">
			<div class="col-sm">
				<h3>Text:</h3>
			</div>
			<div class="col-sm">
			</div>
			<div class="col-sm">
			</div>
			<div class="col-sm">
			</div>
		</div>
	</div>
	<br>
	@foreach($questions as $question)
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<h5>{{$question->body}}</h5>
				</div>
				<div class="col-sm">
					<a href="/edit/question/{{$question->id}}" class="btn btn-outline-warning btn-block" role="button" aria-pressed="true"><i class="fas fa-edit"></i></a>
				</div>
				<div class="col-sm">
					<form method="POST" action="/delete/question/{{$question->id}}"  onclick="return confirm('ARE YOU SURE YOU WANT TO DELETE THIS TEST?')">
				 @method('DELETE')
   				 @csrf
   				 <button type="submit" name="delete" class="btn btn-outline-danger btn-block"><i class="far fa-trash-alt"></i></button>
					</form>
				</div>
				<div class="col-sm">
					<a href="/answers/{{$question->id}}" class="btn btn-outline-info btn-block" role="button" aria-pressed="true">
						Answers
					</a>
				</div>
				</div>
		</div>
		<br>
	@endforeach
	
	
</div>

@endsection