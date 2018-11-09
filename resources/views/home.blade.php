@extends ('layouts.app')

@section('content')

<header class="col-12 d-none d-sm-block">
    <!-- CAROUSEL -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="http://www.apuliasfood.it/wp-content/uploads/2018/03/pugliesit%C3%A0.jpg" alt="First slide">                
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://www.apuliasfood.it/wp-content/uploads/2018/03/ferrovia.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="http://www.apuliasfood.it/wp-content/uploads/2018/03/newsletter.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>

</header>

        
<!-- NEWS COLUMN -->
<div class="row">
<div class="col-12 col-md-12 col-lg-8">

    <p class="catname"><a href="#">Notizie in evidenza</a></p>
    @foreach ($news as $singlenews)
    <section class="col-12">
        <div class="row">
            <aside class="col-5" class="img-aside">
                <img src="{{ $singlenews->img }}" class="img-fluid" alt="immagine" title="immagine">
                <a href="/category/{{ $singlenews->category }}" class="category-label">{{ $singlenews->category }}</a>
            </aside>
            <article class="col-7">
                <h2>{{ $singlenews->title }}</h2>
                <p>{{ $singlenews->body }}</p>
                <a class="read" href="/news/{{$singlenews->id}}/{{$singlenews->title}}">> Continue..</a>
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

</div>

@endsection


