<header id="main-header" class="col-12">

    <!-- FIRST NAVBAR -->
    <nav id="first-navbar" class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupported" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupported">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gastronomia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Itinerari</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Viaggi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Chi siamo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/products">Shop</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contatti">Contatti</a>
                </li>
                        
            </ul>


            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links --> 
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Cerca nel sito" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/admin_page">Personal page
                            </a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
                <form method="POST" action="/locale/it">
                    @csrf
                    <button type="submit" class="nav-item" style="background:none; border:none;">
                        <span class="my-2 flag-icon flag-icon-it">IT</span>
                    </button>
                </form>
                
                <form method="POST" action="/locale/en">
                    @csrf
                    <button type="submit" class="nav-item" style="background: none; border:none;">
                        <span class="my-2 flag-icon flag-icon-en">EN</span>
                    </button>
                </form>


                            
            </ul>
            
        </div>
    </nav>

    <!--div that makes a margin -->  
    <div class="push"></div>

    <!--LOGO -->
    <div class="row">
        <div class="col-12 col-md-12 col-lg-4">
            <a href="#"><img src="/svg/logo.jpg"></a>
        </div>
        <div class="col-lg-8">
            
        </div>
    </div>


    <h1>Tarallando: Prodotti tipici pugliesi</h1>
    <hr>
    <p class="lead">Da Tarallando potete trovare i migliori prodotti tipici pugliesi, direttamente della tradizione meridionale di prodotti da forno genuini e fatti con ingredienti naturali.</p>


    <!-- SECOND NAVBAR -->
    <div id="second-navbar" class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        VIAGGIARE IN PUGLIA
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>  
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CUCINARE IN PUGLIA
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>           
                </ul>
                <a class="btn btn-primary btn-sm" href="#" role="button">NOTIZIE</a>
                <a class="btn btn-secondary btn-sm" href="/products" role="button">SHOP</a>
                <a class="btn btn-warning btn-sm" href="#">ITINERARI</a>
                <!--HIDDEN MENU ON DESKTOP -->
                <ul id="hidden-menu" class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">NOTIZIE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">ITINERARI</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</header>

