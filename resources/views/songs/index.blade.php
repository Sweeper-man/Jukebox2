@extends('layouts.template')


@section('title')
    Songs
@endsection

@section('content')
    <div class="section">
        <div class="card">
            @foreach($songs as $song)
                <img src="https://placehold.co/100" alt="image">
                {{$song->name}} - {{$song->duration}} - {{$song->genre_id}}
                <button class="button">Delete</button>
            @endforeach
        </div>
    </div>

@endsection