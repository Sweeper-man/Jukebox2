<?php

namespace App\Http\Controllers;

use App\Models\Playlist;
use App\Models\Song;
use Illuminate\Http\Request;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $playlists = Playlist::all();
        $songs = Song::all();
        return view("playlists.index", ['playlists' => $playlists, 
        'songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('playlists.create');
    }

    public function addSong(Request $request, Playlist $playlist)
    {
        $request->validate([
            "song_id" => "required|exists:songs,id"
        ]);
        
        $songs = Song::find($request->song_id);
        $songs->playlist_id = $playlist->id;
        $songs->save();
        
        // return back()->with('success', 'Song added to playlist');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => "required"
        ]);

        Playlist::create([
            "name" => $request->get("name")
        ]);

        return redirect()->route('playlist.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Playlist $playlist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Playlist $playlist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Playlist $playlist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $playlist = Playlist::find($id);
        $playlist->delete();
        
        return redirect()->route('playlist.index')->with('success', 'Playlist deleted');
    }
}
