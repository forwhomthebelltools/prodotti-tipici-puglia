@extends('layouts.app')

@section('content')
<br>
<h1 class="text-center">{{$news['title']}}</h1>
<br>
<div class="row" style="margin: 0 auto;">
	<div class="col-12 col-md-12 col-lg-4">
		<img class="img-fluid" src="{{$news['img']}}">
	</div>
		
	<article class="col-12 col-md-12 col-lg-8">
		{{$news['body']}}
	</article>
	
</div>

<br>

<p class="catname"><a href="#">Comments</a></p>

<!-- COMMENTS SECTION -->
@foreach ($comments as $comment)

<div id="show-comment" class="row container">
	<div class="col-md-2 col-sm-2 col-lg-2">
		<figure class="thumbnail">
			<img class="img-fluid" src="{{ $comment->user->img }}" />
		</figure>
	</div>
	<div class="col-md-10 col-sm-10 col-lg-10">
		<div class="card">
	  		<div class="card-header">{{ $comment->user->name }}</div>
	  		<div class="card-body">
	    		<h5 class="card-title">{!! $comment->comment !!}</h5>
	    		<p class="card-text">{{ $comment->created_at }}</p>
	    		@if (Auth::check())

	      			@if ($comment->user_id == Auth::user()->id) 
	      				<div class="row container">
	            			<form method='POST' action='' style="margin-right:10px;">
	            			@csrf
	            			@method('PUT')
	              			<button type='submit' class='btn btn-primary btn-sm'>Modify</button>
	            			</form>
	            
	            			<form method='POST' action='/deletenewscomment/{{$comment->id}}'>
	            			@csrf
	            			@method('DELETE')
	              				<button type='submit' class='btn btn-danger btn-sm' onclick="return confirm('Are you sure?')">Delete</button>
	            			</form>
	      				</div>
	     			  @endif

	    		@endif

	  		</div>
		</div>
	</div>
    
</div>

@endforeach

<!-- COMMENT FORM -->
<div id="insert-comment" class="row container" style="margin-top:15px;">
	<div class="col-md-12 col-sm-12 col-lg-12">
		<form method="POST" action="/insertnewscomment/{{$news['id']}}">
		  	@csrf
		  	<div class="input-group mb-3">
		    	<div class="input-group-prepend">
		    		<button class="btn btn-outline-secondary" type="submit" id="button-addon1">Add comment</button>
		    	</div>
		    	<input type="text" class="form-control" placeholder="..." aria-label="Example text with button addon" aria-describedby="button-addon1" name="comment">
		  	</div>

		</form>
	</div>
</div>

<hr>

<section class="row container">

	<div class="col-12 col-lg-12 col-md-12 col-sm-12">
		<h3 class="text-center">Forse potrebbe interessarti:</h3>
	</div>
            
    <!-- OFFERS CARDS -->
    <div class="col-12 col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <img class="card-img-top" src="https://www.laterradipuglia.it/wp-content/uploads/archeologia-subacquea-in-puglia-263x137.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
    

    <div class="col-12 col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <img class="card-img-top" src="https://www.laterradipuglia.it/wp-content/uploads/caciocavallo-confezionato-263x137.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>
        
    <div class="col-12 col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <img class="card-img-top" src="https://www.laterradipuglia.it/wp-content/uploads/impresa-meridionale-263x137.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-3 col-md-6 col-sm-12">
        <div class="card">
            <img class="card-img-top" src="https://www.laterradipuglia.it/wp-content/uploads/cristalda-pizzomunno-puglia--263x137.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    </div>

</section>
<br>
@endsection