@extends('layouts.main')

@section('title', $movie->title)
@section('content')

<section id="movie">
    <div class="container">
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">{{ $movie->title }}</h5>
              <h6 class="card-subtitle mb-2 text-muted">{{ $movie->original_title }}</h6>
              <p>{{ $movie->nationality }}</p>
              <p>{{ $movie->date }}</p>
              <p>{{ $movie->vote }}</p>
            </div>
          </div>
    </div>
</section>

@endsection