@extends('layouts.app')

@section('content')

@if (Session::has('message')) 

  <div id="success-msg" class="alert alert-success" role="alert">
    <strong>Well done!</strong> {{ Session::get("message") }}
  </div>

@endif


@if (Session::has('mailSent')) 

  <div id="success-msg" class="alert alert-success" role="alert">
    <strong>Well done!</strong> {{ Session::get("mailSent") }}
  </div>

@endif


@if (Session::has('productInserted')) 

  <div id="success-msg" class="alert alert-success" role="alert">
    <strong>Well done!</strong> {{ Session::get("productInserted") }}
  </div>

@endif

<br>
<h1 class="text-center">I NOSTRI PRODOTTI</h1>
<hr class="my-4" style="border-width: 3px; width: 40%;" >
<br>

<div class="row container">

@foreach($products as $product)

<div class="col-12 col-lg-3 col-md-4 col-sm-12 col-xs-12" style="margin-top:20px; margin-bottom: 20px;">

	<div class="card">
  		<div class="card-header text-center bg-info">
    		{{ $product->name }}
  		</div>
      <img class="card-img-top" src="{{$product->img}}" alt="Card image cap">
  		<ul class="list-group list-group-flush">
        <!--first prende ilprimo che trovi, va bene perchè è sempre uno l'utente 
        <li class="list-group-item">Autore: {{ $product->user()->first()->name }}</li> -->
        <li class="list-group-item">Autore: {{ $product->user->name }}</li>
        <li class="list-group-item"><a href="mailto: {{ $product->user->email }}">Contatta il venditore</a></li>
    		<li class="list-group-item">Categoria: {{ $product->category }}</li>
    		<li class="list-group-item">Prezzo: {{ $product->price }}</li>
        <li class="list-group-item"><small class="text-muted">Ultimo aggiornamento: {{ $product->updated_at }}</small></li>
        </ul>
        </div>

@endforeach

</div>

</div>

@endsection