@extends('layout.main')

@section('content')

  <div class="container">
    <h1>COMICS</h1>

    <table class="table my-5">
      <thead>

        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titolo</th>
          <th scope="col">Tipo</th>
          <th scope="col">Serie</th>
          <th scope="col">Prezzo</th>
        </tr>
      </thead>
      <tbody>

        @foreach ($comicList as $comic)
          <tr>
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->type}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->price}}</td>
          </tr>
        @endforeach
        
      
      </tbody>
    </table>

    {{$comicList->links()}}

  </div>

@endsection