<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// queste rotte sono i collegamenti alla varie pagine web del sito
// utilizzo la funzione freccia -> per non dover cambiare tutti gli url in tutte le pagine in futuro

Route::get('/characters', function () {
  return view('characters');
}) ->name('characters');

// la pagina comics la chiamo home per comodità, perchè lavorerò principalmente su questa
Route::get('/', function () {
  return view('home');
}) ->name('home');

Route::get('/movie', function () {
  return view('movie');
}) ->name('movie');

Route::get('/tv', function () {
  return view('tv');
}) ->name('tv');

Route::get('/games', function () {
  return view('games');
}) ->name('games');

Route::get('/collectibes', function () {
  return view('collectibes');
}) ->name('collectibes');

Route::get('/videos', function () {
  return view('videos');
}) ->name('videos');

Route::get('/fans', function () {
  return view('fans');
}) ->name('fans');

Route::get('/news', function () {
  return view('news');
}) ->name('news');

Route::get('/shop', function () {
  return view('shop');
}) ->name('shop');