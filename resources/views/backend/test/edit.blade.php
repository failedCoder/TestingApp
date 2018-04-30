@extends('layouts.master')

@section('content')

<br>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 d-flex justify-content-center">
			<h1>{{$test->name}}</h1>
		</div>
	</div>
	<br>
	<form class="col-md-8 offset-md-2 " method="POST" action="/edit/test/{{$test->id}}">
		@csrf
		@method('PATCH')
		  <div class="form-group row">
		    <label for="name" class="col-sm-2 col-form-label">Name:</label>
		    <div class="col-sm-10">
		      <input type="text" name="name" class="form-control" id="name" value="{{$test->name}}" required>
		    </div>
		  </div>
		 
		  <div class="form-group row">
			    <label for="duration" class="col-sm-2 col-form-label">Duration:</label>
			    <div class="col-6">
			      <input type="text" class="form-control" id="duration" name="duration" value="{{$test->duration}}" required>
			    </div>
		  </div>
		  <div class="form-group row">
		    <div class="col-sm-10">
		      <button type="submit" class="btn btn-primary">Change</button>
		    </div>
		  </div>
</form>
	
</div>

@endsection