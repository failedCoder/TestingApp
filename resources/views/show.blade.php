@extends('layouts.master')

@section('content')

	<div class="row">
		<div class="col-md-8 offset-md-2 d-flex justify-content-center">
			<h1>{{ $test->name }}</h1>
		</div>
	</div>

	<div class="container">
		@foreach($test->questions as $question)
		<div class="row">
			<h2>{{$question->body}}</h2>
		</div>
		<br>
		<div class="container">
			@foreach($question->answers as $answer)
			<div class="row">
				<h5 class="col-md-10">{{$answer->body}}</h5>
				<div class="form-check">
  					<input class="form-check-input " type="checkbox" id="blankCheckbox" value="option1" aria-label="...">
				</div>
			</div>
			@endforeach
		</div>
		<br>
		@endforeach
	</div>

@endsection