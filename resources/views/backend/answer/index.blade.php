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
			<a href="/questions/{{$question->test->id}}">
				<i class="fas fa-arrow-circle-left fa-2x"></i>
			</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-8 offset-md-2 d-flex justify-content-center">
			<h1>{{ $questionText }}</h1>
		</div>
	</div>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-4 mx-auto">
				<a href="/create/answer/{{$question->id}}" class="btn btn-primary btn-lg  btn-block" role="button" aria-pressed="true">Add new answer</a>

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
				<h3>Correct:</h3>
			</div>
			<div class="col-sm">
			</div>
			<div class="col-sm">
			</div>
			
		</div>
	</div>
	<br>
	@foreach($answers as $answer)
		<div class="container">
			<div class="row">
				<div class="col-sm">
					<h5>{{$answer->body}}:</h5>
				</div>
				<div class="col-sm">
					@if($answer->is_correct)
						<h5>YES</h5>
					@else
						<h5>NO</h5>
					@endif
				</div>
				<div class="col-sm">
					<a href="/edit/answer/{{$answer->id}}" class="btn btn-outline-warning btn-block" role="button" aria-pressed="true"><i class="fas fa-edit"></i></a>
				</div>
				<div class="col-sm">
					<form method="POST" action="/delete/answer/{{$answer->id}}"  onclick="return confirm('ARE YOU SURE YOU WANT TO DELETE THIS TEST?')">
				 @method('DELETE')
   				 @csrf
   				 <button type="submit" name="delete" class="btn btn-outline-danger btn-block"><i class="far fa-trash-alt"></i></button>
					</form>
				</div>
				</div>
		</div>

	@endforeach
	
	
</div>


@endsection