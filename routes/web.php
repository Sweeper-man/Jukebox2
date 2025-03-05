<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home/home');
});

Route::get("/songs/all", [SongController::class, "index"])->name("song.index");
Route::get("/songs/create", [SongController::class, "create"])->name("song.create");
Route::post("/songs/store", [SongController::class, "store"])->name("song.store");
Route::delete("/songs/delete/{id}", [SongController::class, "destroy"])->name("song.delete");

Route::get("/genres/all", [GenreController::class, "index"])->name("genre.index");
Route::get("/genres/create", [GenreController::class, "create"])->name("genre.create");
Route::post("/genres/store", [GenreController::class, "store"])->name("genre.store");
Route::delete("/genres/delete/{id}", [GenreController::class, "destroy"])->name("genre.delete");