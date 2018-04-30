@extends('layouts.master')

@section('content')
	<br>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 d-flex justify-content-center">
			<h1>New question for:{{$test->name}}</h1>
		</div>
	</div>
	<br>
	
	<form class="col-md-8 offset-md-2 " method="POST" action="">
		@csrf
		  <div class="form-group row">
		    <label for="question" class="col-sm-2 col-form-label">Question:</label>
		    <div class="col-sm-10">
		      <input type="text" name="body" class="form-control" id="question" placeholder="Enter question text here." required>
		    </div>
		  </div>
		 
		  <div class="form-group row">
		    <div class="col-sm-10">
		      <button type="submit" class="btn btn-primary">Create</button>
		    </div>
		  </div>
</form>
	
</div>

@endsection