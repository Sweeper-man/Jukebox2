@extends('layouts.template')

@section('title')
    Songs added to playlist
@endsection

@section('content')
    <div class="section">
        @foreach($songs as $song)
            {{ $song->name }}
        @endforeach
    </div>
@endsection