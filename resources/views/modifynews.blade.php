@extends('layouts.app')


@section('content')


@foreach ($newsCollection as $news)

<!-- $product is a collection, I need for a foreach loop -->
<div class="row">
	<div class="col-sm-10 col-lg-6 offset-lg-3">
	<br>
		<form method="POST" action="/editnews/{{$news->id}}">
		@csrf
		@method('PUT')
		   <div class="form-group row">
		    <label for="title" class="col-sm-2 col-form-label">Title</label>
		    <div class="col-sm-10">
		      <input type="text" name="title" class="form-control" id="inputTitle" value="{{$news->title}}">
		    </div>
		  </div>
		   <div class="form-group">
		  	<label for="comment">Body (max 255 caratteri)</label>
		  	<textarea class="form-control" rows="5" name="body" id="desc">{{$news->body}}</textarea>
		  </div>
			<div class="form-group col-md-4">
	      		<label for="inputState">Categoria</label>
	      		<select id="inputState" name="category" class="form-control">
	        		@foreach($categories as $key => $value)
            			<option value="<?php echo $key; ?>" <?php if($key == $news->category) echo 'selected'; ?>>{{$value}}</option>
        			@endforeach
	      		</select>
    	  </div>	  
		  <div class="form-group row">
		    <div class="col-sm-10 text-center">
		      <button type="submit" class="btn btn-primary">Update news</button>
		    </div>
		  </div>

		</form>
		<br>
	</div>
</div>

@endforeach

@endsection