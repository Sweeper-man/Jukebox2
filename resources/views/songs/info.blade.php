@extends('layouts.template')

@section('title')
    Song info
@endsection

@section('content')
    <h1>{{$songs->name}}</h1>
    <p><strong>Duration: </strong>{{$songs->duration}} seconds</p>
    <p><strong>Genre ID: </strong>{{$songs->genre_id}}</p>
@endsection