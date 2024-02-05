@extends('home')

@section('main')
    <div class="container">
        <h2 class="text-center">Edit a comic</h2>
        <form action="{{route('comics.update', ['comic' => $comic->id])}}" method="post">
        @csrf
        @method('patch')
        <div class="mb-3">
            <label class="form-label">title</label>
            <input type="text" class="form-control" name="title" value="{{old('title'), $comic->title}}">
        </div>
        <div class="mb-3">
            <label class="form-label">description</label>
            <textarea class="form-control"  rows="3" name="description" value="{{old('description'), $comic->description}}" ></textarea>
        </div>
        <div class="mb-3">
            <label class="form-label">Link your image!</label>
            <input type="text" class="form-control" name="thumb" value="{{old('thumb'), $comic->thumb}}">
        </div>
        <div class="mb-3">
            <label class="form-label">price</label>
            <input type="text" class="form-control" name="price" value="{{old('price'), $comic->price}}">
        </div>
        <div class="mb-3">
            <label class="form-label">series</label>
            <input type="text" class="form-control" name="series" value="{{old('series'), $comic->series}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Sale date</label>
            <input type="text" class="form-control" name="sale_date" value="{{old('sale_date'), $comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label class="form-label">type</label>
            <input type="text" class="form-control" name="type" value="{{old('type'), $comic->type}}">
        </div>
        <div class="mb-3">
            <label class="form-label">artists</label>
            <input type="text" class="form-control" name="artists" value="{{old('artists'), implode(',', $comic->artists)}}">
        </div>
        <div class="mb-3">
            <label class="form-label">writers</label>
            <input type="text" class="form-control" name="writers" value="{{old('writers'), implode(',', $comic->writers)}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <div class="go-back">
            <a href="{{route('comics.show', $comic)}}">Go back to comic</a>
            <br>
            <a href="{{ route('comics.index') }}">Go back to comics list</a>
        </div>
        </form>
    </div>
@endsection