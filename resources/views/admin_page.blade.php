@extends('layouts.app')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{__('frontend.action')}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if (Session::has('message')) 
                        <div id="success-msg" class="alert alert-success" role="alert">
                            <strong>Well done!</strong> {{ Session::get("message") }}
                        </div>
                    @endif
                    You are logged in!
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <a href="/createnews" class="btn btn-outline-primary" role="button" aria-pressed="true"> + Add news</a>
                            <a href="/createproduct" class="btn btn-outline-primary" role="button" aria-pressed="true"> + Add product</a>
                        </div>
                        <div class="col-6 float-right">
                            <form method="POST" action="/uploadphotoimage" enctype="multipart/form-data">
                            @csrf
                              <div class="form-group">
                                <label>Example file input</label>
                                <input type="file" class="form-control-file" name="imageProfile">
                                <input type="submit" value="invia">
                              </div>
                            </form>
                            <img src="{{Auth::user()->img}}" alt="..." class="float-right rounded-circle" style="border: 1px solid black;">
                        </div>
                    </div>
                    <br>
                    <br>
                    <b>Ecco tutte le news che hai inserito:</b>
                    <br>
                    <br>
                    <div class = "row">
                    @foreach ($userNews as $news)
                        <div class="card col-lg-6">
                            <div class="card-body">
                                <h5 class="card-title">{{$news->title}}</h5>
                                <p class="card-text">{{$news->category}}</p>
                                
                                <div class="row">
                                    
                                    <a href="/modifynews/{{$news->id}}" class="btn btn-primary col-lg-4 col-xs-12">Edit news</a>

                                    <form method="post" class="col-lg-4 col-xs-12" action="/deletenews/{{$news->id}}">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete news</button>
                                        
                                    </form>
                                
                                </div>
                                
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@endsection
