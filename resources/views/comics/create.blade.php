@extends('layouts.main')

@section('title', 'Create Comic')

@section('content')
  <main id="comic-create">
    {{-- title --}}
    <h1 class="text-center py-4">Create a new Comic</h1>

    {{-- include comic form --}}
    @include('includes.comics.form')
  </main>
@endsection
