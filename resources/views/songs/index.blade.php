@extends('layouts.template')


@section('title')
    Songs
@endsection

@section('content')
    <h1>Hier komen de songs te staan</h1>
    <ul>
        @foreach($songs as $song)
            <li>{{$song->name}} - {{$song->duration}} - {{$song->genre_id}}</li>
        @endforeach
    </ul>
    
    <div class="section">
        <div class="card">
            <img src="https://via.placeholder.com/300" alt="image">
            <p>Songs</p>
        </div>
    </div>
@endsection