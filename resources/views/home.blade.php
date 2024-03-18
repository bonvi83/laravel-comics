{{-- LA MIA HOME E' LA PAGINA COMICS, ho prefeiro lasciarla home, perchè è quella sulla quale ci lavoro maggiormente --}}

<!-- posso cancellare tutto il codice html, perchè con la direttiva extends tengo SOLO la parte che cambia -->
@extends('layout.app')

<!-- questo sarà il contenuto del segnaposto -->
@section('main-content')

<div class="container">
  <h2>
    comics con arrey serie
  </h2> 
  
  {{-- veridico che stampa in pagina il mio arrey --}}
  {{-- @dump($series) --}}
  
  <!-- stampo tramite foreach gli elementi che mi servono dell'arrey, in questo caso l'immagine (thumb) ed il nome della serie -->
  <div class="row">
    @foreach($series as $serie)
    <div class="col2">
      <img src="{{ $serie['thumb'] }}" alt="" class="img-fluid">
      <h3>{{ $serie['series'] }}</h3>
    </div>
    @endforeach
  </div>
</div>

@endsection