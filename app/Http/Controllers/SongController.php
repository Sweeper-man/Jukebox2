<?php

namespace App\Http\Controllers;

use App\Models\Song;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $songs = Song::all();
        return view('songs.index', ['songs'=>$songs]);
    }

    public function filter($id) 
    {
        $genreId = Song::where('genre_id', $id)->get();
        return view('songs.index', ['songs'=>$genreId]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("songs.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "duration" => "required|int|min:1|max:1080",
            "genre_id" => "required|exists:genres,id"
        ]);

        Song::create([
            "name" => $request->get("name"),
            "duration" => $request->get("duration"),
            "genre_id" => $request->get("genre_id")
        ]);

        return redirect()->route('song.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Song $song)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Song $song)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Song $song)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $song = Song::find($id);
        $song->delete();
        
        return redirect()->route('song.index')->with('success', 'Song deleted');
    }
}
