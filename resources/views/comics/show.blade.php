@extends('layout.main')

@section('content')

  <div class="container">
    <h1>{{$comic->title}}</h1>
    
    <a href="{{route('comics.index')}}" type="button" class="btn btn-primary my-2">Indietro</a>

    <div class="container-img my-5">
      <img style="display: block" src="{{$comic->thumb}}" alt="">
    </div>
    

    <div class="div mb-3">
    <h5>Descrizione:</h5>
    <p>{{$comic->description}}</p>
    </div> 

    <div class="div mb-3">
    <h5><h5>Serie:</h5>
    <p>{{$comic->series}}</p>
    </div> 

    <div class="div mb-3">
    <h5>Tipo:</h5>
    <p>{{$comic->type}}</p>
    </div> 

    <div class="div mb-3">
    <h5>Data di uscita:</h5>
    <p>{{$comic->sale_date}}</p>
    </div> 

    <div class="div mb-3">
    <h5>Prezzo:</h5>
    <p>{{$comic->price}}</p>
    </div> 
    

    
    
    
    
  </div>

@endsection