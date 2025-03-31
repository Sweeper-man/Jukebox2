@extends('layouts.template')

@section('title')
    Songs
@endsection

@section('content')
    <!-- <input type="text" placeholder="Search..."> -->
    @foreach($genres as $genre)
        <form action="{{ route('song.filter', $genre->id)}}" method="GET">
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
                    {{$song->name}}
                    <form action="{{ route('song.info', $song->id) }}" method="GET">
                        <button>Info</button>
                    </form>

                    <form action="{{ route('song.delete', $song->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="button">Delete</button>
                    </form>
                @endforeach
            </div>
        @endif
    </div>
@endsection