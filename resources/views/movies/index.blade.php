@extends('layouts.main')

@section('title', 'Home')
@section('content')

<section id="movies">
    <div class="container">
        @foreach($movies as $movie)
        <div class="card">
            <div class="card-body">
              <a href="{{ route('movie.show', ['id' => $movie->id]) }}"><h5 class="card-title">{{ $movie->title }}</h5></a>
              <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
              <p>{{ $movie->nationality }}</p>
              <p>{{ $movie->date }}</p>
              <p>{{ $movie->vote }}</p>
            </div>
          </div>
        @endforeach
    </div>
</section>
@endsection