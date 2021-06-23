@extends('layout.main')

@section('content')



<div class="container">
  <h1 class="text-center">Movies</h1>

  <div class="m-5 d-flex flex-row row justify-content-center">
    @foreach ($movies as $movie)
      <div class="col-md-4 m-1 border border-success border border-3">
  
        <div class="">
          <span>Titolo:</span>
          <span>{{$movie['title']}}</span>
        </div>
    
        <div>
          <span>Nazionalità:</span>
          <span>{{$movie['nationality']}}</span>
        </div>
    
        <div>
          <span>Data di uscita:</span>
          <span>{{$movie['date']}}</span>
        </div>
    
        <div>
          <span>Voto:</span>
          <span>{{$movie['vote']}}</span>
        </div>
  
      </div>
    @endforeach
  </div>

</div>
    
@endsection
