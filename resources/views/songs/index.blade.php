@extends('layouts.template')


@section('title')
    Songs
@endsection

@section('content')
    <div class="section">
        <div class="card">
            <ul>
                @foreach($songs as $song)
                    <li>{{$song->name}} - {{$song->duration}} - {{$song->genre_id}}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endsection