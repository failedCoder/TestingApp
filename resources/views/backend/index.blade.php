@extends('layouts.master')

@section('content')
<br>
<div class="container">
	<div class="row">
		<div class="col-sm-4 mx-auto">
			<a href="/create/test" class="btn btn-primary btn-lg  btn-block" role="button" aria-pressed="true">Create new test</a>

		</div>
	</div>
</div>
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
		<div class="col-sm">
			<h3>Name:</h3>
		</div>
		<div class="col-sm">
			<h3>Questions:</h3>
		</div>
		<div class="col-sm">
			<h3>Created at:</h3>
		</div>
		<div class="col-sm">
			
		</div>
		
	</div>
</div>
<br>
<div class="container">
	@foreach($tests as $test)
		<div class="row">
			<div class="col-sm">
				<h5>{{ $test->name }}</h5>
			</div>
			<div class="col-sm">
				<h5>{{ $test->questions->count() }}</h5>
			</div>
			<div class="col-sm">
				<h5>{{ $test->created_at->diffForHumans() }}</h5>
			</div>

<div class="col-sm">
	<div class="row">
		<div class="col">
			<a href="/edit/test/{{$test->id}}" class="btn btn-outline-warning btn-block" role="button" aria-pressed="true"><i class="fas fa-edit"></i></a>
		</div>
		<div class="col">
			<form method="POST" action="/profile/delete/{{ $test->id }}"  onclick="return confirm('ARE YOU SURE YOU WANT TO DELETE THIS TEST?')">
				 @method('DELETE')
   				 @csrf
   				 <button type="submit" name="delete" class="btn btn-outline-danger btn-block"><i class="far fa-trash-alt"></i></button>
			</form>
		</div>
		<div class="col">
			<a href="/questions/{{ $test->id }}" class="btn btn-outline-info btn-block" role="button" aria-pressed="true"><i class="fas fa-question"></i></a>
		</div>
	</div>
</div>

		</div>
		
<br>

	@endforeach
</div>
@endsection

