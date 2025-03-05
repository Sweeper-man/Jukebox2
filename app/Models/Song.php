<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'duration', 'genre_id'];

    public function genres()
    {
        return $this->belongsTo(Song::class);
    }
}
