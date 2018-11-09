@extends('layouts.app')

@section('content')

<!-- NEWS COLUMN -->
<br>
<div class="row">
    <div class="col-12 col-md-12 col-lg-8"><br>
        <h1 class="text-center">Articoli in {{ucfirst(trans($category))}}</h1><br><br>

@foreach ($categoryNews as $news)

	<section class="col-12">
        <div class="row">
            <aside class="col-5" class="img-aside">
                <img src="{{ $news->img }}" class="img-fluid" alt="immagine" title="immagine">
            </aside>
            <article class="col-7">
                <h2>{{ $news->title }}</h2>
                <p>{{ $news->body }}</p>
                <a class="read" href="/news/{{$news->id}}/{{$news->title}}">> Continue..</a>
            </article>
        </div> 
    </section>

@endforeach

</div>

<!-- SECOND COLUMN: SOCIAL AND EVENTS -->
<div id="social-column" class="col-12 col-md-12 col-lg-4 text-center">

    <!-- SOCIAL WALL -->
    <div id="social-wall">

        <p class="catname"><a href="#">Social Wall</a></p>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src=".." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src=".." alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

    <div id="events-wall">

        <!--  EVENTS COLUMN -->
        <p class="catname"><a href="#">Eventi</a></p>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="http://www.eventisalento.info/components/com_rseventspro/assets/images/events/coppp.png" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="https://www.safetysecuritymagazine.com/wp-content/uploads/sicurezza-antiterrorismo-eventi-pubblici-960x480.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

    </div>

</div>


<section class="row container">
            
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


@endsection