<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TracksController extends Controller
{
    public function index(Request $request) {
        $genre = $request->input('genre');

        $tracks = DB::table('tracks')
            ->select('tracks.Name as TrackName', 'genres.Name as GenreName', 'tracks.UnitPrice', 'albums.Title as AlbumName', 'artists.Name as ArtistName')
            ->join('genres', 'genres.GenreId', '=', 'tracks.GenreId')
            ->join('albums', 'albums.AlbumId', '=', 'tracks.AlbumId')
            ->join('artists', 'artists.ArtistId', '=', 'albums.ArtistId')
            ->where('GenreName', '=', $genre)
            ->get();

        return view('tracks', [
            'genre' => $genre,
            'tracks' => $tracks
        ]);
    }
}
