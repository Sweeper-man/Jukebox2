@extends('layouts.template')

@section('title')
    Genres
@endsection

@section('content')
    <div class="section">
        @if($genres->count())
            <div class="card">
                @foreach($genres as $genre)
                    <img src="https://placehold.co/100" alt="image">
                    {{$genre->name}}
                    <form action="{{ route('genre.delete', $genre->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="button">Delete</button>
                    </form>
                @endforeach
            </div>
        @endif
    </div>
@endsection