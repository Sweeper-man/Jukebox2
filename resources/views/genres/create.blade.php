@extends('layouts.template')

@section('title')
    Create genres
@endsection

@section("content")
    <div class="section">
        <div class="card">
            <form action="/genres/store" method="POST">
                @csrf
                <label for="name">Vul hier de naam van het genre in:</label>
                <input id="name" name="name" type="text">
                
                <input type="submit" value="Maak genre aan">

                @error('name')
                    <p style="color:red">{{$message}}</p>
                @enderror
            </form>
        </div>
    </div>
@endsection