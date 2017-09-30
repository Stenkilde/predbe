<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Serie;
use App\Team;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::all();
       
        return $series;
    }

    public function single($id)
    {
        $serie = Serie::where('id', $id)->first();
        $teams = Serie::find($serie->id)->player;

        $newTeams = [];

        foreach ($teams as $team) {
            array_push($newTeams, Team::where('id', $team->team_id)->first());
        }

        $serie->teams = $newTeams;

        return $serie;
    }
}
