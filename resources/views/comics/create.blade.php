@extends('layout.main')

@section('content')
  <div class="container">
    <h1>Crea il tuo fumetto</h1>

    <form class="my-5"
    action="{{route('comics.store')}}"
    method="POST">
    @csrf

      <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Titolo">
      </div>

      <div class="mb-3">
        <label for="Thumb" class="form-label">Link immagine</label>
        <input type="text" name="thumb" class="form-control" id="thumb" placeholder="Link immagine">
      </div>

      <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" name="price" class="form-control" id="price" placeholder="Prezzo">
      </div>

      <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input type="text" name="series" class="form-control" id="series" placeholder="Serie">
      </div>

      <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" name="type" class="form-control" id="type" placeholder="Tipo">
      </div>

      <div class="mb-3">
        <label for="sale_date" class="form-label">Data di uscita</label>
        <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Es. 2010-10-10">
      </div>


      <div class="mb-5">
        <label for="description" class="form-label">Descrizione</label>
        <textarea type="text" name="description" class="form-control" id="description" placeholder="Descrizione"></textarea>
      </div>


      <button type="submit" class="btn btn-primary">Invia</button>
      <button type="reset" class="btn btn-secondary">Reset</button>


    </div>
  
      
  </form>

@endsection