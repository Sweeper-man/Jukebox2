@extends('layouts.template')

@section('content')
    <div class="container">
        <h1>{{ $song->name }}</h1>
        <p><strong>Duration:</strong> {{ $song->duration }} seconds</p>
        <p><strong>Genre:</strong> {{ $song->genre_id }}</p>
    </div>
@endsection