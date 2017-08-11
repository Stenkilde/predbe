<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class GamesController extends Controller
{
    public function index()
    {
        $games = Game::all();

        return $games;
    }

    public function single($id)
    {
        $game = Game::where('id', $id)->first();

        return $game;
    }
}
