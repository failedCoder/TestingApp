@extends('layouts.master')

@section('content')

<br><br><br><br>

<div class="container">
	<div class="row col-4 mx-auto">
			
		<div class="card border-danger mb-3" style="width: 100%">
		  <div class="card-header text-center">{{$test->name}}</div>
		  <div class="card-body text-danger">
		  <h5 class="card-title text-center">Result: {{ $correctCount }}/{{ $test->questions->count() }}</h5>
		  <br>
		  <a href="/" class="btn btn-outline-danger col-4 offset-4" role="button" aria-pressed="true">Ok</a>
		</div>

	</div>
	
</div>

@endsection