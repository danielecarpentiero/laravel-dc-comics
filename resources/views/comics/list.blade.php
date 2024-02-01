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
            @endforeach
        </ul>
        <a href="{{route('comics.create')}}">Add a new comic</a>
    </main>
</div>
@endsection