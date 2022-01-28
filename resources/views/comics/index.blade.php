@extends('layout.main')

@section('content')

  <div class="container">
    <h1>COMICS</h1>
    <a href="{{route('comics.create')}}" type="button" class="btn btn-secondary mt-3">Crea il tuo fumetto</a>

    <table class="table my-5">
      <thead>

        <tr>
          <th scope="col">ID</th>
          <th scope="col">Titolo</th>
          <th scope="col">Tipo</th>
          <th scope="col">Serie</th>
          <th scope="col">Prezzo</th>
          <th scope="col">Dettagli</th>
          <th scope="col">Modifica</th>
          <th scope="col">Elimina</th>
          
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
            <td>
              <a href="{{route('comics.show', $comic)}}" type="button" class="btn btn-primary">Dettagli</a>
            </td>
            <td>
              <a href="{{route('comics.edit', $comic)}}" type="button" class="btn btn-success">Modifica</a>
            </td>
            
              <form class="my-5"
              action="{{route('comics.destroy', $comic)}}"
              method="POST">
              @method('DELETE')
              @csrf

                {{-- <a href="{{route('comics.edit', $comic)}}" type="button" class="btn btn-danger">Elimina</a> --}}
                <td>
                  <button type="submit" class="btn btn-danger">Elimina</button>
                </td>
              </form>
            
            
        @endforeach
        
      
      </tbody>
    </table>

    {{$comicList->links()}}

  </div>

@endsection