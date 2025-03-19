@extends('layouts.template')

@section('title')
    Songs
@endsection

@section('content')
    <!-- <input type="text" placeholder="Search..."> -->
    @foreach($genres as $genre)
        <form method="GET" action="{{ route('song.filter', $genre->id)}}">
            <input type="checkbox" id="filter" value="{{$genre->id}}"
            {{ in_array($genre->id, request('genres', [])) ? 'checked' : '' }}
            onchange="this.form.submit()">
            {{$genre->name}}
        </form>
    @endforeach
    <div class="section">
        @if($songs->count())
            <div class="card">
                @foreach($songs as $song)
                    <img src="https://placehold.co/100" alt="image">
                    {{$song->name}} - {{$song->duration}} - {{$song->genre_id}}
                    <form action="{{ route('song.delete', $song->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="button">Delete</button>
                    </form>
                @endforeach
            </div>
        @endif
    </div>
@endsection