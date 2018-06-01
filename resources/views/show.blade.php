@extends('layouts.master')

@section('content')
<br>
@if ($errors->any())
	<div class="container">
	    <div class="alert alert-danger text-center">
	        <ul>
	            @foreach ($errors->all() as $error)
	                <p>{{ $error }}</p>
	            @endforeach
	        </ul>
	    </div>
    </div>
@endif
	
	<div class="container col-10 offset-1">

		<div class="row">
			<div>
				<h1>{{ $test->name }}</h1>
			</div>

			<div class="ml-auto my-auto">
				<input type="hidden" value="{{ $test->duration }}" id="duration">
				<p>Time left: <span id="time"></span></p>
			</div>
			
		</div>

	</div>
	
	<hr>

	<div class="container col-10 offset-1">
		<form action="/result/{{ $test->id }}" method="post" id="form" name="theForm">
			@csrf
			@foreach($test->questions as $question)
			<div class="row">
				<h3>{{$question->body}}</h3>
			</div>
			<br>
			<div class="container">
				@foreach($question->answers as $answer)
				<div class="row">
					<h5 class="col-md-10">{{$answer->body}}</h5>
					<div class="form-check">
	  					<input class="form-check-input " type="checkbox" id="blankCheckbox" value="{{$answer->id}}" name="answers[{{$question->id}}][]" aria-label="...">
					</div>
				</div>
				@endforeach
			</div>
			<br>
			@endforeach
			<br><br>
			<button type="submit" class="btn btn-danger" name="sub">Submit</button>
		</form>
	</div>

	<script type="text/javascript" src="/js/timer.js"></script>

@endsection