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
      <button>load more</button>
    </div>
    @include('includes.merch')
  </main>
@endsection
