@extends('layouts.master')

@section('content')
<br>
<div class="container">
	<div class="row">
		<div class="col-sm">
			<h3>Name:</h3>
		</div>
		<div class="col-sm">
			<h3>Questions:</h3>
		</div>
		<div class="col-sm">
			<h3>Time:</h3>
		</div>
		<div class="col-sm">
			<h3>Author:</h3>
			
		</div>
	</div>
</div>
<br>

<div class="container">
	@foreach($tests as $test)
		@php
		$rawName = $test->name;
		$name = str_replace(" ", "-", $rawName); 
		@endphp
	<a href="/test/{{$test->id}}/{{$name}}">
	<div class="row">
		<div class="col-sm">
			<h5>{{ $test->name }}</h5>
		</div>
		<div class="col-sm ">
			@php
				$count = $test->questions->count();

				if($count == 1):
					$q = "question";
				else:
					$q = "questions";
				endif;
			@endphp
			<h5>{{ $count." ".$q }} </h5>
		</div>
		<div class="col-sm">
			<h5>{{ $test->duration }} min</h5>
		</div>
		<div class="col-sm">
			<h5>{{ $test->user->email }}</h5>
			
		</div>
	</div>
	</a>
	@endforeach
</div>
<br>
<div class="d-flex justify-content-center">
{{ $tests->links() }}
</div>

@endsection