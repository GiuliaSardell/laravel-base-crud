@extends('layout.main')

@section('content')
@dump($errors->all())
  <div class="container">
    <h1>Modifica il fumetto {{$comic->title}}</h1>

    {{-- @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
          <li>
            {{$error}}
          </li>
          @endforeach
        </ul>
      </div>
    @endif --}}

    <form class="my-5"
    action="{{route('comics.update', $comic)}}"
    method="POST">
    @method('PUT')
    @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" 
        value="{{old('title', $comic->title)}}" 
        name="title" class="form-control @error('title') is-invalid @enderror" 
        id="title" placeholder="Titolo">
        @error('title')
        <p class="alert alert-danger" role="alert">
          {{$message}}
        </p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="Thumb" class="form-label">Link immagine</label>
        <input type="text" value="{{old('thumb', $comic->thumb)}}" 
        name="thumb" 
        class="form-control @error('thumb') is-invalid @enderror" 
        id="thumb" placeholder="Link immagine">
        @error('thumb')
        <p class="alert alert-danger" role="alert">
          {{$message}}
        </p>
          
        @enderror
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" value="{{old('price', $comic->price)}}" name="price" class="form-control @error('price') is-invalid @enderror" 
        id="price" placeholder="Prezzo">
        @error('price')
        <p class="alert alert-danger" role="alert">
          {{$message}}
        </p>
          
        @enderror
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" 
        value="{{old('series', $comic->series)}}" 
        name="series" 
        class="form-control @error('series') is-invalid @enderror" 
        id="series" placeholder="Serie">
        @error('series')
          <p class="alert alert-danger" role="alert">
            {{$message}}
          </p>
        @enderror
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" value="{{old('type', $comic->type)}}" name="type" class="form-control @error('type') is-invalid @enderror" id="type" placeholder="Tipo">
        @error('type')
        <p class="alert alert-danger" role="alert">
          {{$message}}
        </p>
          
        @enderror
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Data di uscita</label>
        <input type="text" value="{{old('sale_date', $comic->sale_date)}}" name="sale_date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" placeholder="Es. 2010-10-10">
        @error('sale_date')
          <p class="alert alert-danger" role="alert">
            {{$message}}
          </p>
        @enderror
      </div>


      <div class="mb-5">
        <label for="description" class="form-label">Descrizione</label>
        <textarea type="text" name="description" class="form-control @error('description') is-invalid @enderror" 
        id="description" 
        value="{{old('description', $comic->description)}}"
        placeholder="Descrizione">{{$comic->description}}</textarea>
        @error('description')
          <p class="alert alert-danger" role="alert">
            {{$message}}
          </p>
        @enderror
      </div>


      <button type="submit" class="btn btn-primary">Invia</button>
      <button type="reset" class="btn btn-secondary">Reset</button>


    </div>
  
      
  </form>

@endsection