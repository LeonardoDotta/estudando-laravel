<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use App\Models\Movie;
use App\Models\Song;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function createSeries()
    {
        return view('utilities.createSerie');
    }

    public function createMovies()
    {
        return view('utilities.createMovie');
    }

    public function createSongs()
    {
        return view('utilities.createSong');
    }

    public function storeSeries(Request $request)
    {
        $serieName = $request->input('nome');

        DB::insert('insert into series (nome) values (?)', [$serieName]);
        return redirect('/dashboard');
    }

    public function storeMovies(Request $request)
    {
        $movieName = $request->input('nome');

        DB::insert('insert into movies (nome) values (?)', [$movieName]);
        return redirect('/dashboard');
    }

    public function storeSongs(Request $request)
    {
        $songName = $request->input('nome');

        DB::insert('insert into songs (nome) values (?)', [$songName]);
        return redirect('/dashboard');
    }

    public function importacoes()
    {
        return view('importacoes');
    }

    public function dashboard()
    {
        $series = Serie::query()->orderBy('nome', 'desc')->get();
        $movies = Movie::query()->orderBy('nome', 'desc')->get();
        $songs = Song::query()->orderBy('nome', 'desc')->get();
        // usando o 'desc' é possível deixar em ordem alfabética de z para a; sem ele, é de a para z.

        return view('utilities.dashboard')->with(compact('series', 'movies', 'songs'));
        // Dentro do compact do with, series e movies dentro de string significam as variáveis
    }

    public function destroySeries()
    {
        
    }
}
