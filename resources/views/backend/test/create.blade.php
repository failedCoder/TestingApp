@extends('layouts.master')

@section('content')
<br>
@if ($errors->any())
    <div class="container alert alert-danger">
        
            @foreach ($errors->all() as $error)
                <p class="text-center">{{ $error }}</p>
            @endforeach
        
    </div>
@endif
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 d-flex justify-content-center">
			<h1>Create new test:</h1>
		</div>
	</div>
	
	<br>
	
	<form class="col-md-8 offset-md-2 " method="POST" action="/create/test">
		@csrf
		  <div class="form-group row">
		    <label for="name" class="col-sm-2 col-form-label">Name:</label>
		    <div class="col-sm-10">
		      <input type="text" name="name" class="form-control" id="name" placeholder="Enter test name here." required>
		    </div>
		  </div>
		 
		  <div class="form-group row">
			    <label for="duration" class="col-sm-2 col-form-label">Duration:</label>
			    <div class="col-6">
			      <input type="text" class="form-control" id="duration" placeholder="Enter duration here(in minutes)." name="duration" required>
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

