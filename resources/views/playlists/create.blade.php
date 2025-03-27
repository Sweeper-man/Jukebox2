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
            </form>
        </div>
    </div>
@endsection