@extends('layouts.template')

@section('title')
    Genres
@endsection

@section('content')
    <h1>Hier komen de genres te staan</h1>
    <ul>
        @foreach($genres as $genre)
            <li>{{$genre->name}}</li>
        @endforeach
    </ul>

    <div class="section">
        <div class="card">
            <img src="https://via.placeholder.com/300" alt="image">
            <p>Genres</p>
        </div>
    </div>
@endsection