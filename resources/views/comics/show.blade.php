@extends('layout.main')

@section('content')

  <div class="container">
    <h1>{{$comic->title}}</h1>
    <a href="{{route('comics.index')}}" type="button" class="btn btn-primary my-2">Indietro</a>

    <img style="display: block" src="{{$comic->thumb}}" alt="">


            
    <h5>Descrizione:</h5>{{$comic->description}}
    <h5>Tipo:</h5>{{$comic->type}}
    <h5>Serie:</h5>{{$comic->series}}
    <h5>Data di uscita:</h5>{{$comic->sale_date}}
    <h5>Prezzo:</h5>{{$comic->price}}
    
    
    
  </div>

@endsection