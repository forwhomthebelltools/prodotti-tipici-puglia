@extends ('layouts.app')

@section('content')

	        <!-- JUMBOTRON WITH FORM -->
<header class="jumbotron" id="jumbotron-contact">
      
  <br>

    <h3 class="text-center">Contattaci, ti risponderemo subito!</p>

    <hr id="hr-contact">

        <form method="POST" action="/thanks">
        @csrf
          <div class="form-group row">
            <div class="col-sm-10 col-lg-6 offset-lg-3">
              <input type="email" name="email" class="form-control" id="colFormLabelSm" placeholder="Your email">
            </div>
          </div>
          @if ($errors->has('email'))

            <div class="alert alert-danger col-sm-10 col-lg-6 offset-lg-3">{{$errors->first('email')}}</div>

          @endif
          <div class="form-group row">
            <div class="col-sm-10 col-lg-6 offset-lg-3">
              <input type="text" name="name" class="form-control" id="colFormLabel" placeholder="Your name">
            </div>
          </div>
          @if ($errors->has('name'))

            <div class="alert alert-danger col-sm-10 col-lg-6 offset-lg-3">{{$errors->first('name')}}</div>

          @endif
          <div class="form-group row">
            <div class="col-sm-10 col-lg-6 offset-lg-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Your message" id="comment"></textarea>
            </div>
          </div>
          @if ($errors->has('message'))

            <div class="alert alert-danger col-sm-10 col-lg-6 offset-lg-3">{{$errors->first('message')}}</div>

          @endif 

          <button type="submit" class="btn btn-primary" style="background-color: gray;">Invia</button>
            
        </form>

</header>

@endsection