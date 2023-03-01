@extends('layouts.main')

@section('title', 'Comics')

@section('content')
  <main id="comics">
    <div class="container">
      <h3>current series</h3>
      <div class="row row-cols-6 my-5">
        @foreach ($comics as $comic)
          @include('includes.comicCard')
        @endforeach
      </div>
    </div>
    <div class="more-btn">
      <button class="me-3">load more</button>
      <a href="#" class="text-decoration-none">add</a>
    </div>
    @include('includes.merch')
  </main>
@endsection
