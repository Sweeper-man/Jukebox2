@extends('layouts.template')

@section('title')
    Genres
@endsection

@section('content')
    <div class="section">
        <div class="card">
            @foreach($genres as $genre)
                <img src="https://placehold.co/100" alt="image">
                {{$genre->name}}
            @endforeach
        </div>
    </div>
@endsection