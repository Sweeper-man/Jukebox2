@extends('layouts.template')

@section('title')
    Playlists
@endsection

@section('content')
    <div class="section">
        @if($playlists->count())
            <div class="card">
                @foreach($playlists as $playlist)
                    <img src="https://placehold.co/100" alt="image">
                    {{$playlist->name}}

                    <form action="{{ route('playlist.addSong', $playlist->id) }}" method="POST">
                        @csrf
                        <select>
                            <option value="">Select a song</option>
                            @foreach($songs as $song)
                                <option value="{{ $song->id }}">{{ $song->name }}</option>
                            @endforeach
                        </select>
                        <button type="submit">Add song</button>
                    </form>

                    <form action="{{ route('playlist.delete', $playlist->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="button">Delete</button>
                    </form>
                @endforeach
            </div>
        @endif
    </div>
@endsection