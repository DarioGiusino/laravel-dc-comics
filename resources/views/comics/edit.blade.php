@extends('layouts.main')

@section('title', 'Edit Comic')

@section('content')
  <main id="comic-edit">
    {{-- title --}}
    <h1 class="text-center py-4">Edit Comic</h1>

    {{-- include comic form --}}
    @include('includes.comics.form')
  </main>
@endsection
