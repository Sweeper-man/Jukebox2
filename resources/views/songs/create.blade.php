@extends('layouts.template')

@section('title')
    Create songs
@endsection

@section('content')
    <div class="section">
        <div class="card">
            <form action="/songs/store" method="POST">
                @csrf
                <label for="name">Vul hier de naam van het liedje in:</label>
                <input id="name" name="name" type="text">

                <label for="">Vul hier de duration van het liedje in:</label>
                <input name="duration" type="number">

                <label for="">Vul hier het genre ID in:</label>
                <input name="genre_id" type="text">

                <input type="submit" value="Maak nummer aan">

                @error('name')
                    <p style="color:red">{{$message}}</p>
                @enderror
                
                @error('duration')
                    <p style="color:red">{{$message}}</p>
                @enderror

                @error('genre_id')
                    <p style="color:red">{{$message}}</p>
                @enderror
            </form>
        </div>
    </div>
@endsection