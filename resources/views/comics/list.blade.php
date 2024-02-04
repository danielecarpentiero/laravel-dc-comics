@extends('home')

@section('main')
<div class="container text-center">
    <main>
        <ul>
            @foreach ($comics as $comic)
            <li class="list-unstyled">
               <a href="{{route('comics.show', $comic)}}">
                {{$comic['title']}} 
                </a>
            </li> 
            <form action="{{route('comics.destroy', ['comic' => $comic->id])}} style="display: inline-block;" onsubmit="return confirm('Are you sure you want to delete this comic?');"" method="post">
            @csrf
            @method('delete')
            <input type="submit" class="btn btn-danger" value="Delete the record">
            </form>
            @endforeach
        </ul>
        <a href="{{route('comics.create')}}">Add a new comic</a>
        <br>
    </main>
</div>
@endsection