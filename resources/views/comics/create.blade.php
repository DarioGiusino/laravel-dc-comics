@extends('layouts.main')

@section('title', 'Create Comic')

@section('content')
  <main id="comic-create">
    {{-- title --}}
    <h1 class="text-center py-4">Create a new Comic</h1>

    {{-- form --}}
    <div class="container">
      <form class="w-100" action="{{ route('comics.store') }}" method="post">
        @csrf
        <div class="row">
          {{-- form title --}}
          <div class="col-6">
            <div class="mb-3">
              <label for="title" class="form-label">Title:</label>
              <input type="text" class="form-control" id="title" name="title" placeholder="Comic title...">
            </div>
          </div>
          {{-- form thumb --}}
          <div class="col-6">
            <div class="mb-3">
              <label for="thumb" class="form-label">Thumb:</label>
              <input type="url" class="form-control" id="thumb" name="thumb" placeholder="Comic thumb...">
            </div>
          </div>
          {{-- form description --}}
          <div class="col-12">
            <div class="mb-3">
              <label for="description" class="form-label">Description:</label>
              <textarea name="description" id="description" cols="30" class="form-control" placeholder="Comic description..."></textarea>
            </div>
          </div>
          {{-- form price --}}
          <div class="col-2">
            <div class="mb-3">
              <label for="price" class="form-label">Price:</label>
              <input type="number" step="0.01" min="0.00" max="9999.99" value="0.00" class="form-control"
                id="price" name="price">
            </div>
          </div>
          {{-- form series --}}
          <div class="col-6">
            <div class="mb-3">
              <label for="series" class="form-label">Series:</label>
              <input type="text" class="form-control" id="series" name="series" placeholder="Comic series...">
            </div>
          </div>
          {{-- form type --}}
          <div class="col-2">
            <div class="mb-3">
              <label for="type" class="form-label">Type:</label>
              <select class="form-select" id="type" name="type">
                <option value="" selected>Select one...</option>
                <option value="graphic novel">Graphic Novel</option>
                <option value="comic book">Comic Book</option>
              </select>
            </div>
          </div>
          {{-- form sale date --}}
          <div class="col-2">
            <div class="mb-3">
              <label for="sale_date" class="form-label">Sale date</label>
              <input type="date" class="form-control" id="sale_date" name="sale_date" value="1999-01-01">
            </div>
          </div>
          {{-- form artists --}}
          <div class="col-6">
            <div class="mb-3">
              <label for="artists" class="form-label">Artists:</label>
              <textarea name="artists" id="artists" cols="30" class="form-control" placeholder="Comic artists..."></textarea>
            </div>
          </div>
          {{-- form writers --}}
          <div class="col-6">
            <div class="mb-3">
              <label for="writers" class="form-label">Writers:</label>
              <textarea name="writers" id="writers" cols="30" class="form-control" placeholder="Comic writers..."></textarea>
            </div>
          </div>
          {{-- buttons --}}
          <div class="d-flex justify-content-center align-items-center my-5">
            {{-- submit --}}
            <button type="submit" class="btn btn-primary">Create</button>
            {{-- reset --}}
            <button type="reset" class="btn btn-danger mx-3">Reset</button>
            {{-- go back --}}
            <a href="{{ route('comics.index') }}" class="btn btn-secondary">Go back</a>
          </div>
        </div>
      </form>
    </div>
  </main>
@endsection
