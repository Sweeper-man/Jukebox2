@extends('layouts.template')


@section('title')
    Songs
@endsection

@section('content')
    <link rel="stylesheet" href="/style.css">
    <h1>Hier komen de songs te staan</h1>
    <ul>
        @foreach($songs as $song)
            <li>{{$song->name}} - {{$song->duration}} - {{$song->genre_id}}</li>
        @endforeach
    </ul>
@endsection