@extends('home')

@section('main')
<div class="container text-center">
    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
    <h2>Series: {{ $comic['series'] }}</h2>
    <h3>Price: {{ $comic['price'] }}$</h3>
    <p>Description: {{ $comic['description'] }}</p>
    <h4>Out on: {{ $comic['sale_date'] }}</h4>
    <p>Type: {{ $comic['type'] }}</p>
    <ul>Inkers:
        @foreach ($comic['artists'] as $artist)
            <li class="list-unstyled">- {{ $artist }}</li>
        @endforeach
    </ul>
    <ul>Writers:
        @foreach ($comic['writers'] as $writer)
            <li class="list-unstyled">- {{ $writer }}</li>
        @endforeach
    </ul>
    <a href="{{ route('comics.index') }}">Back to comics list</a>
    <br>
    <a class="btn btn-info my-3" href="{{ route('comics.edit', ['comic' => $comic->id]) }}">Edit this comic</a>
    <form action="{{route('comics.destroy', ['comic' => $comic->id])}} style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this comic?');"" method="post">
        @csrf
        @method('delete')
        <input type="submit" class="btn btn-danger" value="Delete the record">
        </form>

</div>
@endsection
