@extends('layouts.template')

@section('title')
    Song info
@endsection

@section('content')
    @foreach($songs as $song)
        <h1>{{ $song->name }}</h1>
        <p><strong>Duration: </strong>{{ $song->duration }} seconds</p>
        <p><strong>Genre ID: </strong>{{ $song->genre_id }}</p>
    @endforeach
@endsection