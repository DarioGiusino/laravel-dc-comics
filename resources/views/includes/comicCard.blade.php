<a href="{{ route('comics.show', $comic->id) }}" class="comic-card">
  <figure>
    <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
  </figure>
  <p>{{ $comic->title }}</p>
</a>
