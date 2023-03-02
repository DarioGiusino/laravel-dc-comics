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

    {{-- delete toast --}}
    @if (session('message'))
      <div class="alert alert-danger d-flex justify-content-between align-items-center" role="alert" id="delete-alert">
        <p class="mb-0">{{ session('message') }}</p>
        <button type="button" class="btn-close ms-3" id="alert-btn"></button>
      </div>
    @endif
  </main>
@endsection

@section('scripts')
  <script>
    const closeBtn = document.getElementById('alert-btn');
    const toast = document.getElementById('delete-alert');

    closeBtn.addEventListener('click', () => {
      toast.classList.add('dissolving');

    })

    setInterval(() => {
      toast.classList.add('dissolving');
    }, 3000);
  </script>
@endsection
