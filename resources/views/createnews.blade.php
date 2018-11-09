@extends('layouts.app')

@section('content')
<br>
<h1 class="text-center">INSERT YOUR NEWS</h1>
<hr class="my-4" style="border-width: 3px; width: 40%;" >
<br>
<div class="row">
	<div class="col-sm-10 col-lg-6 offset-lg-3" style="border: 3px solid lightgray; border-radius: 8px; padding: 15px;">
		<form method="POST" action="insertnews" enctype="multipart/form-data">
		@csrf
		   <div class="form-group row">
		    <label for="title" class="col-sm-2 col-form-label">Title</label>
		    <div class="col-sm-10">
		      <input type="text" name="title" class="form-control" id="inputTitle" placeholder="Title" value="{{ old('title')}}">
		    </div>
		    @if ($errors->has('title'))

                <div class="alert alert-danger col-sm-10 col-lg-10 offset-sm-1 offset-lg-1">{{$errors->first('title')}}</div>

            @endif
		  </div>
		  
		   <div class="form-group">
		  	<label for="comment">Body (max 300 caratteri)</label>
		  	<textarea class="form-control" rows="5" name="body" id="body">{{ old('body')}}</textarea>
		  </div>
		  @if ($errors->has('body'))

		  		<div class="alert alert-danger col-sm-10 col-lg-10 offset-sm-1 offset-lg-1">{{$errors->first('body')}}</div>

          @endif
		  <span class="btn btn-default btn-file">
    		Upload image <input type="file" name="immagine">
		  </span>
		  @if ($errors->has('immagine'))

                <div class="alert alert-danger col-sm-10 col-lg-12">{{$errors->first('immagine')}}</div>

          @endif
		  <div class="form-group col-md-4">
      		<label for="inputState">Categoria</label>
      		<select id="inputState" name="category" class="form-control">
        		<option value="itinerari" selected>Itinerari</option>
        		<option value="gastronomia">Gastronomia</option>
        		<option value="viaggi">Viaggi</option>
      		</select>
    	  </div>
    	  <br>	  
		  <div class="form-group row">
		    <div class="col-sm-10 text-center">
		      <button type="submit" class="btn btn-primary">Insert news</button>
		    </div>
		  </div>

		</form>
	</div>
</div>
<br>


@endsection