@extends('layouts.template')

@section('title')
    Create playlists
@endsection

@section('content')
    <div class="section">
        <div class="card">
            <form action="/playlists/store" method="POST">
                @csrf
                <label for="name">Vul hier de naam van de playlist in:</label>
                <input id="name" name="name" type="text">

                <input type="submit" value="Maak playlist aan">

                @error('name')
                    <p style="color:red">{{$message}}</p>
                @enderror
            </form>
        </div>
    </div>
@endsection