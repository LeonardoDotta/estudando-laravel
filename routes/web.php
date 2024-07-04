<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ola', function () {
    return 'Olá!';
});

Route::get('/dashboard', [SeriesController::class, 'dashboard']);
Route::get('/importacoes', [SeriesController::class, 'importacoes']);
Route::get('/series/create', [SeriesController::class, 'createSeries']);
Route::get('/movies/create', [SeriesController::class, 'createMovies']);
Route::get('/songs/create', [SeriesController::class, 'createSongs']);
Route::post('/dashboard/saveSerie', [SeriesController::class, 'storeSeries']);
Route::post('/dashboard/saveMovie', [SeriesController::class, 'storeMovies']);
Route::post('/dashboard/saveSong', [SeriesController::class, 'storeSongs']);
