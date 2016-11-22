<?php

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

Route::resource('games', 'GamesController');

Route::bind('games', function($value, $route) {
    return App\Game::whereSlug($value)->first();
});

Route::get('/', function () {
    return view('app');
});
