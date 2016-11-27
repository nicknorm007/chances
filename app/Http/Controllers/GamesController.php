<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GamesController extends Controller
{
    public function index()
    {

        $games = Game::all(['id', 'name'])->pluck('name', 'name');
        return view('games.index', compact('games'));

    }
    public function store()
    {

        $games = Game::all(['id', 'name'])->pluck('name', 'name');
        return view('games.index', compact('games'));

    }
}
