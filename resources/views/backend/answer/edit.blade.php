@extends('layouts.master')

@section('content')
	<br>
<div class="container">
	<div class="row">
		<div class="col-md-8 offset-md-2 d-flex justify-content-center">
			<h1>{{$answer->body}}</h1>
		</div>
	</div>
	<br>
	
	<form class="col-md-8 offset-md-2 " method="POST" action="">
		@csrf
		@method('PATCH')
		  <div class="form-group row">
		    <label for="question" class="col-sm-2 col-form-label">Answer:</label>
		    <div class="col-sm-10">
		      <input type="text" name="body" class="form-control" id="question" value="{{$answer->body}}" required>
		    </div>
		  </div>

		  <label for="correct" class="col-form-label">Is this answer correct? </label>
		  <div class="form-check form-check-inline" id="correct">
			  <input class="form-check-input" type="radio" name="correct"  value="1" id="inlineRadio1">
			  <label class="form-check-label" for="inlineRadio1">YES</label>
		 </div>
		 <div class="form-check form-check-inline">
			  <input class="form-check-input" type="radio" name="correct" id="inlineRadio2" value="0">
			  <label class="form-check-label" for="inlineRadio2">NO</label>
		</div>
		 
		  <div class="form-group row">
		    <div class="col-sm-10">
		      <button type="submit" class="btn btn-primary">Edit</button>
		    </div>
		  </div>
</form>
	
</div>
@endsection