@extends('layouts.main')

@section('title', 'Comics')

@section('content')
  {{-- comics --}}
  <main id="comics">
    <div class="container">
      <h3>current series</h3>
      <div class="row row-cols-6 my-5 w-100">
        @foreach ($comics as $comic)
          @include('includes.comicCard')
        @endforeach
      </div>
    </div>

    {{-- buttons --}}
    <div class="more-btn">
      <button class="me-3">load more</button>
      <a href="{{ route('comics.create') }}" class="text-decoration-none">add</a>
    </div>

    {{-- merch (blue) row --}}
    @include('includes.merch')
  </main>
@endsection
